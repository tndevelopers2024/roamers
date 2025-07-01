// Global Dropdown Functionality for Roamers Website
// This file ensures dropdowns work on all pages

(function() {
    'use strict';
    
    // Initialize dropdowns when DOM is loaded
    function initDropdowns() {
        console.log('Initializing global dropdowns...');
        
        // Get all dropdown toggles
        const dropdownToggles = document.querySelectorAll('.dropdown-toggle');
        console.log('Found dropdown toggles:', dropdownToggles.length);
        
        if (dropdownToggles.length === 0) {
            console.log('No dropdown toggles found on this page');
            return;
        }
        
        dropdownToggles.forEach(function (toggle) {
            console.log('Adding click listener to:', toggle.textContent.trim());
            
            // Remove any existing listeners to prevent duplicates
            toggle.removeEventListener('click', handleDropdownClick);
            toggle.addEventListener('click', handleDropdownClick);
        });
        
        // Add global event listeners
        document.removeEventListener('click', handleOutsideClick);
        document.addEventListener('click', handleOutsideClick);
        
        document.removeEventListener('keydown', handleEscapeKey);
        document.addEventListener('keydown', handleEscapeKey);
    }
    
    // Handle dropdown click
    function handleDropdownClick(e) {
        e.preventDefault();
        e.stopPropagation();
        
        console.log('Dropdown clicked:', this.textContent.trim());
        
        const dropdown = this.closest('.dropdown');
        const dropdownMenu = dropdown.querySelector('.dropdown-menu');
        
        if (!dropdown || !dropdownMenu) {
            console.log('Dropdown elements not found');
            return;
        }
        
        // Close all other dropdowns first
        document.querySelectorAll('.dropdown').forEach(function (otherDropdown) {
            if (otherDropdown !== dropdown) {
                otherDropdown.classList.remove('show');
                const otherMenu = otherDropdown.querySelector('.dropdown-menu');
                if (otherMenu) {
                    otherMenu.classList.remove('show');
                }
            }
        });
        
        // Toggle current dropdown
        dropdown.classList.toggle('show');
        dropdownMenu.classList.toggle('show');
        
        console.log('Dropdown toggled, show class:', dropdown.classList.contains('show'));
    }
    
    // Handle outside click
    function handleOutsideClick(e) {
        if (!e.target.closest('.dropdown')) {
            document.querySelectorAll('.dropdown').forEach(function (dropdown) {
                dropdown.classList.remove('show');
                const menu = dropdown.querySelector('.dropdown-menu');
                if (menu) {
                    menu.classList.remove('show');
                }
            });
        }
    }
    
    // Handle escape key
    function handleEscapeKey(e) {
        if (e.key === 'Escape') {
            document.querySelectorAll('.dropdown').forEach(function (dropdown) {
                dropdown.classList.remove('show');
                const menu = dropdown.querySelector('.dropdown-menu');
                if (menu) {
                    menu.classList.remove('show');
                }
            });
        }
    }
    
    // Initialize when DOM is ready
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initDropdowns);
    } else {
        initDropdowns();
    }
    
    // Also initialize on window load to catch any dynamically added content
    window.addEventListener('load', function() {
        setTimeout(initDropdowns, 100);
    });
    
    // Make function globally available for manual initialization
    window.initRoamersDropdowns = initDropdowns;
    
    console.log('Roamers dropdown script loaded successfully');
})(); 