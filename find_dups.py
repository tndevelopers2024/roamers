import os
import sys
import hashlib
from collections import defaultdict

def find_duplicates(folder):
    hashes = defaultdict(list)
    print(f"Scanning {folder}...")
    file_count = 0
    for root, dirs, files in os.walk(folder):
        for filename in files:
            if filename in ['.DS_Store', 'Thumbs.db'] or filename.startswith('._'):
                continue
            filepath = os.path.join(root, filename)
            try:
                with open(filepath, 'rb') as f:
                    file_hash = hashlib.md5(f.read()).hexdigest()
                hashes[file_hash].append(filepath)
                file_count += 1
            except Exception as e:
                print(f"Error reading {filepath}: {e}", file=sys.stderr)
    
    print(f"Scanned {file_count} files.")
    duplicates = {h: paths for h, paths in hashes.items() if len(paths) > 1}
    
    if not duplicates:
        print('No duplicate assets found.')
    else:
        print(f"Found {len(duplicates)} sets of duplicates:\n")
        for h, paths in duplicates.items():
            print(f'Duplicates (MD5: {h}):')
            for path in paths:
                print(f'  {path}')
            print()

find_duplicates('/Applications/XAMPP/xamppfiles/htdocs/roamers/assets')
