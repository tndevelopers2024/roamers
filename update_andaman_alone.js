const fs = require('fs');
const path = require('path');

const files = [
    "andaman-christmas&newyear-enquiry-form.php"
];

const dir = "c:\\\\xampp\\\\htdocs\\\\roamers";

// Use forgiving regexes to catch old Rewind section variations
const cssPattern = /(\s*)\.rewind-swiper\s*\{\s*overflow.*?position: relative !important;\s*\}/gs;

const getCssReplacement = (indent) => `${indent}/* Rewind Section */
${indent}.rewind-section { padding: 60px 20px 100px; max-width: 1200px; margin: 0 auto; }
${indent}.rewind-title-area { text-align: center; width: 100%; }
${indent}.rewind-title-area h2 { font-size: 32px; font-weight: 800; color: #1a1a1a; margin: 0 0 8px 0; font-family: 'Outfit', sans-serif; text-transform: uppercase; letter-spacing: 1px; }
${indent}.rewind-title-area p { font-size: 16px; color: #666; margin: 0; font-weight: 500; }
${indent}.journey-nav-container { display: flex !important; justify-content: center !important; gap: 20px !important; margin-top: 40px !important; width: 100% !important; position: relative !important; z-index: 1000 !important; padding-bottom: 20px !important; }
${indent}.journey-nav-btn { width: 50px !important; height: 50px !important; border-radius: 50% !important; background: #e63946 !important; color: #fff !important; display: flex !important; align-items: center !important; justify-content: center !important; cursor: pointer !important; transition: all 0.3s ease !important; box-shadow: 0 4px 15px rgba(230, 57, 70, 0.3) !important; border: none !important; position: relative !important; top: auto !important; left: auto !important; right: auto !important; bottom: auto !important; transform: none !important; }
${indent}.rewind-nav-btn { display: none !important; }
${indent}.rewind-swiper .swiper-wrapper { height: 520px; }
${indent}.rewind-swiper { overflow: visible !important; padding: 20px 0; width: 100%; }
${indent}.rewind-card { position: relative; height: 500px; border-radius: 25px; overflow: hidden; transition: all 0.4s ease; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1); background: #fff; }
${indent}.rewind-card img { width: 100%; height: 100%; object-fit: cover; transition: transform 0.5s ease; }
${indent}.card-overlay-top { position: absolute; top: 20px; right: 20px; z-index: 10; }
${indent}.arrow-icon { width: 40px; height: 40px; border-radius: 50%; background: rgba(255, 255, 255, 0.4); backdrop-filter: blur(4px); -webkit-backdrop-filter: blur(4px); display: flex; align-items: center; justify-content: center; color: #fff; border: 1px solid rgba(255, 255, 255, 0.5); transition: all 0.3s ease; font-size: 14px; }
${indent}.rewind-swiper .swiper-slide { cursor: pointer; }`;

const mediaQPattern = /@media\s*\(max-width:\s*768px\)\s*\{\s*\.journey-nav-container\s*\{\s*display:\s*none\s*!important;\s*\}\s*\.rewind-card\s*\{\s*height:\s*380px;\s*\}\s*\.rewind-swiper\s*\.swiper-wrapper\s*\{\s*height:\s*400px\s*!important;\s*\}\s*\}/gs;

const mediaQReplacement = `@media (max-width: 768px) {
            .journey-nav-container { display: none !important; }
            .journey-nav-btn { width: 40px !important; height: 40px !important; }
            .rewind-card { height: 380px; }
            .rewind-swiper .swiper-wrapper { height: 400px !important; }
            .rewind-header { flex-direction: column; align-items: center; }
            .rewind-title-area h2 { font-size: 28px; }
        }`;

const html1Pattern = /<section[^>]*style="position:\s*relative;\s*overflow:\s*hidden;\s*padding:\s*0(;?)">\s*<div\s+style="margin-bottom:\s*50px;\s*padding:\s*60px\s+20px\s+0(;?)">\s*<div\s+style="text-align:\s*center(;?)">\s*<h3\s+class="head">/gs;

const html1Replacement = `<section class="rewind-section reveal" style="position: relative; overflow: hidden; padding: 0px 0px 0px 0px ;">
        <div class="rewind-header reveal" style="margin-bottom: 50px;">
            <div class="rewind-title-area">
                <h3 class="head" style="text-align: center; margin-bottom: 20px;">`;

const html2Pattern = /<div\s+style="position:\s*relative;\s*max-width:\s*1200px;\s*margin:\s*0\s+auto;\s*padding:\s*0\s+20px(;?)">\s*<div\s+class="swiper\s+rewind-swiper">/gs;

const html2Replacement = `<div style="position: relative;">
            <div class="swiper rewind-swiper" style="overflow: visible !important;">`;

const jsPatternOriginal = /(\s*)new Swiper\('\.rewind-swiper', \{.*?\n\s*\}\);\s*$/gms;
// simpler regex for replacing old swiper config:
const jsOldSwiperPattern = /(\s*)new Swiper\('\.rewind-swiper', \{.*?320: \{ slidesPerView: 1\.4, spaceBetween: 30 \}.*?\} \}\);/gs;

const getJsReplacement = (indent) => `${indent}const rewindSwiper = new Swiper('.rewind-swiper', {
${indent}    effect: 'coverflow',
${indent}    grabCursor: true,
${indent}    centeredSlides: true,
${indent}    slideToClickedSlide: true,
${indent}    loop: true,
${indent}    speed: 1000,
${indent}    autoplay: {
${indent}        delay: 3500,
${indent}        disableOnInteraction: false,
${indent}    },
${indent}    coverflowEffect: {
${indent}        rotate: 20,
${indent}        stretch: 0,
${indent}        depth: 100,
${indent}        modifier: 1,
${indent}        slideShadows: false,
${indent}    },
${indent}    navigation: {
${indent}        nextEl: '.journey-next',
${indent}        prevEl: '.journey-prev',
${indent}    },
${indent}    breakpoints: {
${indent}        320: {
${indent}            slidesPerView: 1.4,
${indent}            spaceBetween: 30,
${indent}            coverflowEffect: {
${indent}                rotate: 15,
${indent}                depth: 150,
${indent}                modifier: 1,
${indent}            }
${indent}        },
${indent}        640: {
${indent}            slidesPerView: 2.5,
${indent}            spaceBetween: 30,
${indent}            coverflowEffect: {
${indent}                rotate: 20,
${indent}                depth: 100,
${indent}                modifier: 1,
${indent}            }
${indent}        },
${indent}        1024: {
${indent}            slidesPerView: 3,
${indent}            spaceBetween: 50,
${indent}            coverflowEffect: {
${indent}                rotate: 20,
${indent}                depth: 100,
${indent}                modifier: 1,
${indent}            }
${indent}        }
${indent}    }
${indent}});`;

let updatesCount = 0;

files.forEach(filename => {
    const filepath = path.join(dir, filename);
    if (!fs.existsSync(filepath)) {
        console.log("File not found: " + filepath);
        return;
    }

    let origContent = fs.readFileSync(filepath, 'utf-8');

    // Normalize newlines simply to do robust replacement
    let content = origContent.replace(/\\r\\n/g, '\\n');

    // Replace CSS
    content = content.replace(cssPattern, (match, indent) => getCssReplacement(indent));

    // Replace Media Query
    content = content.replace(mediaQPattern, mediaQReplacement);

    // Replace HTML 1
    content = content.replace(html1Pattern, html1Replacement);

    // Replace HTML 2
    content = content.replace(html2Pattern, html2Replacement);

    // Replace JS
    content = content.replace(jsOldSwiperPattern, (match, indent) => {
        // If it already contains const rewindSwiper = new Swiper, don't replace
        if (match.includes('const rewindSwiper = new Swiper')) return match;
        return getJsReplacement(indent);
    });

    if (content !== origContent.replace(/\\r\\n/g, '\\n')) {
        // preserve original newlines if possible, but actually just write \n
        fs.writeFileSync(filepath, content, 'utf-8');
        updatesCount++;
        console.log("Updated " + filepath);
    } else {
        console.log("No changes made to " + filepath + " (Already updated or pattern not found)");
    }
});

console.log("Total files updated: " + updatesCount);
