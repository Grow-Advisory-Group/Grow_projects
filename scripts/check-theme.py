#!/usr/bin/env python3
"""Static WordPress theme link and image check."""
from pathlib import Path
import re, sys
root = Path(__file__).resolve().parents[1] / "wp-content" / "themes" / "grow-project-group"
issues=[]
files=list(root.rglob("*.php"))
for file in files:
    content=file.read_text(encoding="utf-8")
    if re.search(r'href="[^"]+\.html(?:[?#][^"]*)?"', content):
        issues.append(f"Static .html link: {file.relative_to(root)}")
    for name in re.findall(r"['\"]\/assets\/images\/([^'\"]+)['\"]", content):
        if not (root / "assets" / "images" / name).is_file():
            issues.append(f"Missing image {name}: {file.relative_to(root)}")
if issues:
    print("\n".join(issues)); sys.exit(1)
print(f"PASS: {len(files)} PHP files, no static .html links or missing referenced image assets")
