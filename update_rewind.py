import os
import re

files = [
    "wayanad-enquiry-form.php",
    "kodaikanal-enquiry-form.php",
    "chikmagalur-enquiry-form.php",
    "pondicherry-enquiry-form.php",
    "varkala-enquiry-form.php",
    "kedarkantha-enquiry-form.php",
    "kolukkumalai-enquiry-form.php",
    "bali-enquiry-form.php",
    "dubai-enquiry-form.php",
    "srilanka-enquiry-form.php",
    "yelagiri-enquiry-form.php",
    "ladakh-circuit-enquiry-form.php",
    "kashmir-enquiry-form.php",
    "manali-enquiry-form.php",
    "spitivalley-winter-enquiry-form.php",
    "skandagiri-enquiry-form.php",
    "munnar-alleppey-enquiry-form.php"
]

files = [os.path.join(r"c:\xampp\htdocs\roamers", f) for f in files]

css_pattern = re.compile(r"(\s*)\.rewind-section \{ padding:.*?\.rewind-card img \{ width: 100%; height: 100%; object-fit: cover; transition: transform 0\.5s ease; \}", re.DOTALL)

css_replacement = """{indent}/* Rewind Section */
{indent}.rewind-section {{ padding: 60px 20px 100px; max-width: 1200px; margin: 0 auto; }}
{indent}.rewind-title-area {{ text-align: center; width: 100%; }}
{indent}.rewind-title-area h2 {{ font-size: 32px; font-weight: 800; color: #1a1a1a; margin: 0 0 8px 0; font-family: 'Outfit', sans-serif; text-transform: uppercase; letter-spacing: 1px; }}
{indent}.rewind-title-area p {{ font-size: 16px; color: #666; margin: 0; font-weight: 500; }}
{indent}.journey-nav-container {{ display: flex !important; justify-content: center !important; gap: 20px !important; margin-top: 40px !important; width: 100% !important; position: relative !important; z-index: 1000 !important; padding-bottom: 20px !important; }}
{indent}.journey-nav-btn {{ width: 50px !important; height: 50px !important; border-radius: 50% !important; background: #4ec0db !important; color: #fff !important; display: flex !important; align-items: center !important; justify-content: center !important; cursor: pointer !important; transition: all 0.3s ease !important; box-shadow: 0 4px 15px rgba(78, 192, 219, 0.3) !important; border: none !important; position: relative !important; top: auto !important; left: auto !important; right: auto !important; bottom: auto !important; transform: none !important; }}
{indent}.rewind-nav-btn {{ display: none !important; }}
{indent}.rewind-swiper .swiper-wrapper {{ height: 520px; }}
{indent}.rewind-swiper {{ overflow: visible !important; padding: 20px 0; width: 100%; }}
{indent}.rewind-card {{ position: relative; height: 500px; border-radius: 25px; overflow: hidden; transition: all 0.4s ease; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1); background: #fff; }}
{indent}.rewind-card img {{ width: 100%; height: 100%; object-fit: cover; transition: transform 0.5s ease; }}
{indent}.card-overlay-top {{ position: absolute; top: 20px; right: 20px; z-index: 10; }}
{indent}.arrow-icon {{ width: 40px; height: 40px; border-radius: 50%; background: rgba(255, 255, 255, 0.4); backdrop-filter: blur(4px); -webkit-backdrop-filter: blur(4px); display: flex; align-items: center; justify-content: center; color: #fff; border: 1px solid rgba(255, 255, 255, 0.5); transition: all 0.3s ease; font-size: 14px; }}
{indent}.rewind-swiper .swiper-slide {{ cursor: pointer; }}"""

media_q_target = "@media (max-width: 768px) { .journey-nav-container { display: none !important; } .rewind-card { height: 380px; } .rewind-swiper .swiper-wrapper { height: 400px !important; } }"
media_q_replacement = """@media (max-width: 768px) {
            .journey-nav-container { display: none !important; }
            .journey-nav-btn { width: 40px !important; height: 40px !important; }
            .rewind-card { height: 380px; }
            .rewind-swiper .swiper-wrapper { height: 400px !important; }
            .rewind-header { flex-direction: column; align-items: center; }
            .rewind-title-area h2 { font-size: 28px; }
        }"""

html1_target = """<section style="position: relative; overflow: hidden; padding: 0;">
        <div style="margin-bottom: 50px; padding: 60px 20px 0;">
            <div style="text-align: center;">
                <h3 class="head">"""
html1_replacement = """<section class="rewind-section reveal" style="position: relative; overflow: hidden; padding: 0px 0px 0px 0px ;">
        <div class="rewind-header reveal" style="margin-bottom: 50px;">
            <div class="rewind-title-area">
                <h3 class="head" style="text-align: center; margin-bottom: 20px;">"""


html2_target = """<div style="position: relative; max-width: 1200px; margin: 0 auto; padding: 0 20px;">
            <div class="swiper rewind-swiper">"""
html2_replacement = """<div style="position: relative;">
            <div class="swiper rewind-swiper" style="overflow: visible !important;">"""


js_pattern = re.compile(r"(\s*)new Swiper\('\.rewind-swiper', \{.*?320: \{ slidesPerView: 1\.4, spaceBetween: 30 \},.*?1024: \{ slidesPerView: 3, spaceBetween: 50 \}.*?\} \}\);", re.DOTALL)
js_replacement = """{indent}const rewindSwiper = new Swiper('.rewind-swiper', {{
{indent}    effect: 'coverflow',
{indent}    grabCursor: true,
{indent}    centeredSlides: true,
{indent}    slideToClickedSlide: true,
{indent}    loop: true,
{indent}    speed: 1000,
{indent}    autoplay: {{
{indent}        delay: 3500,
{indent}        disableOnInteraction: false,
{indent}    }},
{indent}    coverflowEffect: {{
{indent}        rotate: 20,
{indent}        stretch: 0,
{indent}        depth: 100,
{indent}        modifier: 1,
{indent}        slideShadows: false,
{indent}    }},
{indent}    navigation: {{
{indent}        nextEl: '.journey-next',
{indent}        prevEl: '.journey-prev',
{indent}    }},
{indent}    breakpoints: {{
{indent}        320: {{
{indent}            slidesPerView: 1.4,
{indent}            spaceBetween: 30,
{indent}            coverflowEffect: {{
{indent}                rotate: 15,
{indent}                depth: 150,
{indent}                modifier: 1,
{indent}            }}
{indent}        }},
{indent}        640: {{
{indent}            slidesPerView: 2.5,
{indent}            spaceBetween: 30,
{indent}            coverflowEffect: {{
{indent}                rotate: 20,
{indent}                depth: 100,
{indent}                modifier: 1,
{indent}            }}
{indent}        }},
{indent}        1024: {{
{indent}            slidesPerView: 3,
{indent}            spaceBetween: 50,
{indent}            coverflowEffect: {{
{indent}                rotate: 20,
{indent}                depth: 100,
{indent}                modifier: 1,
{indent}            }}
{indent}        }}
{indent}    }}
{indent}}});"""

updates_count = 0
for filepath in files:
    if os.path.exists(filepath):
        with open(filepath, 'r', encoding='utf-8') as f:
            content = f.read()
        
        orig_content = content
        
        # Replace CSS
        def css_replacer(match):
            return css_replacement.format(indent=match.group(1))
            
        content = css_pattern.sub(css_replacer, content)
        
        # Replace Media Query
        content = content.replace(media_q_target, media_q_replacement)
        
        # Replace HTML 1
        content = content.replace(html1_target, html1_replacement)
        
        # Replace HTML 2
        content = content.replace(html2_target, html2_replacement)
        
        # Replace JS
        def js_replacer(match):
            # Using match.group(1) gives the indentation space, e.g. "            "
            return js_replacement.format(indent=match.group(1))
            
        content = js_pattern.sub(js_replacer, content)
        
        if content != orig_content:
            with open(filepath, 'w', encoding='utf-8') as f:
                f.write(content)
            updates_count += 1
            print(f"Updated {filepath}")
        else:
            print(f"No changes made to {filepath} (Already updated or pattern not found)")
    else:
        print(f"File not found: {filepath}")

print(f"Total files updated: {updates_count}")
