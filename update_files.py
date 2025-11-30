import os
import re

# File list
files = ['tipe3.html', 'tipe4.html', 'tipe5.html', 'tipe6.html', 'tipe7.html', 'tipe8.html', 'tipe9.html']
workspace_dir = r'E:\laragon\www\Pendaftaran'

# New CSS link
new_css_link = '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.1/font/bootstrap-icons.min.css">'

# New CSS rules
new_css_rules = '''.header-wrapper { background-color: white; box-shadow: 0 2px 4px rgba(0,0,0,0.1); padding: 15px 0; }
.header-content { display: flex; justify-content: space-between; align-items: center; max-width: 1100px; margin: 0 auto; padding: 0 16px; }
.header-logos { display: flex; align-items: center; gap: 15px; }
.header-logos img { height: 50px; }
.navbar-nav { list-style: none; display: flex; gap: 0; margin: 0; padding: 0; }
.navbar-nav a { color: #333; font-weight: 500; padding: 0.5rem 1rem; transition: color 0.3s; font-size: 0.95rem; text-decoration: none; display: inline-block; }
.navbar-nav a:hover, .navbar-nav a.active { color: #6B1717; }
footer { background: #5a1414; color: white; padding: 60px 0 20px; }
footer h3, footer h4 { font-weight: bold; margin-bottom: 20px; }
footer p { color: white; margin: 10px 0; }
footer a { color: white; text-decoration: none; transition: color 0.3s; }
footer a:hover { color: #ff6b6b; }
.footer-container { max-width: 1100px; margin: 0 auto; padding: 0 16px; }
.footer-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 30px; margin-bottom: 30px; }
.social-icon { width: 50px; height: 50px; border-radius: 10px; display: inline-flex; align-items: center; justify-content: center; background: rgba(255,255,255,0.1); transition: all 0.3s; margin-right: 10px; color: white; }
.social-icon:hover { background: rgba(255,255,255,0.3); transform: scale(1.2) rotate(5deg); }
.footer-bottom { text-align: center; padding-top: 30px; margin-top: 30px; border-top: 1px solid rgba(255,255,255,0.2); }
.main-content { display: flex; justify-content: center; align-items: center; flex: 1; padding: 20px; background-color: #5C0D0D; }
body { display: flex; flex-direction: column; min-height: 100vh; font-family: 'Arial', sans-serif; background-color: #f5f5f5; margin: 0; padding: 0; box-sizing: border-box; }'''

# Header HTML
header = '''</head>
<body>
    <div class="header-wrapper">
        <div class="header-content">
            <div class="header-logos">
                <img src="LogoKSR.jpg" alt="PMI Logo">
                <img src="LogoPolije.jpg" alt="POLIJE Logo">
                <img src="Logo PMI.png" alt="KSR PMI Logo">
            </div>
            <nav>
                <ul class="navbar-nav">
                    <li><a href="#beranda">Beranda</a></li>
                    <li><a href="Tentang-Ksr.html">Tentang</a></li>
                    <li><a href="Layanan.html">Layanan</a></li>
                    <li><a href="#blog">Blog</a></li>
                    <li><a href="#jadwal">Jadwal</a></li>
                    <li><a href="pendaftaran.html">Pendaftaran</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="main-content">
    <div class="poster-container">'''

# Footer HTML
footer = '''</div>
</div>
<footer>
    <div class="footer-container">
        <div class="footer-grid">
            <div>
                <h3>KSR PMI POLIJE</h3>
                <p>Unit Kegiatan Mahasiswa yang berfokus pada kegiatan kemanusiaan dan kepalangmerahan di Politeknik Negeri Jember.</p>
                <div style="margin-top: 15px;">
                    <a href="#" class="social-icon" title="Instagram"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="social-icon" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social-icon" title="YouTube"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
            <div>
                <h4>Kontak</h4>
                <p><i class="bi bi-geo-alt-fill"></i> Pollie Mastrip Jalan Aselole</p>
                <p><i class="bi bi-telephone-fill"></i> 083123456789</p>
                <p><i class="bi bi-envelope-fill"></i> HASVDGDV@GMAIL.COM</p>
            </div>
        </div>
        <div class="footer-bottom">
            <p style="margin: 0;">© 2024 KSR PMI Politeknik Negeri Jember. All Rights Reserved.</p>
            <p style="margin: 5px 0 0 0;">Designed by Kelompok 3D Nakama</p>
        </div>
    </div>
</footer>'''

for file_name in files:
    file_path = os.path.join(workspace_dir, file_name)
    
    if not os.path.exists(file_path):
        print(f'File not found: {file_name}')
        continue
    
    # Read file
    with open(file_path, 'r', encoding='utf-8') as f:
        content = f.read()
    
    # 1. Add bootstrap-icons link after font-awesome link
    font_awesome_link = '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">'
    if font_awesome_link in content:
        content = content.replace(font_awesome_link, font_awesome_link + '\n' + new_css_link)
    
    # 2. Find and replace body CSS in style section
    body_css_pattern = r'body\s*{\s*font-family:\s*[\'"]Arial[\'"],\s*sans-serif;\s*background-color:\s*#5C0D0D;[^}]*padding:\s*20px;\s*}'
    
    if re.search(body_css_pattern, content):
        content = re.sub(body_css_pattern, new_css_rules.split('\n')[-1], content)
    
    # 3. Add CSS rules in style tag before the body CSS
    style_tag_pattern = r'(<style[^>]*>)'
    style_match = re.search(style_tag_pattern, content)
    if style_match:
        insert_pos = style_match.end()
        content = content[:insert_pos] + '\n' + new_css_rules.replace('body {', '').strip() + '\n' + content[insert_pos:]
    
    # 4. Replace </head><body> variants with header
    content = re.sub(r'</head>\s*<body[^>]*>', header, content)
    
    # 5. Add footer before </body></html>
    content = re.sub(r'</div>\s*</body>', footer + '\n</body>', content)
    content = re.sub(r'</div></body>', footer + '\n</body>', content)
    
    # Write file
    with open(file_path, 'w', encoding='utf-8') as f:
        f.write(content)
    
    print(f'Updated: {file_name}')

print("\nAll files updated successfully!")
