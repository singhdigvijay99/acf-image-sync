<div align="center">

# 🖼️ ACF Image Sync

### Automatically Synchronize Featured Images with ACF Image Fields in WordPress

![WordPress](https://img.shields.io/badge/WordPress-6.x-21759B?style=for-the-badge&logo=wordpress&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-8+-777BB4?style=for-the-badge&logo=php&logoColor=white)
![ACF](https://img.shields.io/badge/Advanced_Custom_Fields-Compatible-success?style=for-the-badge)
![License](https://img.shields.io/badge/License-MIT-blue?style=for-the-badge)
![Status](https://img.shields.io/badge/Status-Active-success?style=for-the-badge)
![GitHub Stars](https://img.shields.io/github/stars/singhdigvijay99/acf-image-sync?style=for-the-badge)
![GitHub Forks](https://img.shields.io/github/forks/singhdigvijay99/acf-image-sync?style=for-the-badge)
![Issues](https://img.shields.io/github/issues/singhdigvijay99/acf-image-sync?style=for-the-badge)

**A lightweight WordPress plugin that keeps your Featured Image and ACF Image Field synchronized automatically.**

Perfect for developers building custom WordPress websites with **Advanced Custom Fields (ACF)**.

⭐ Star this repository if you find it useful.

</div>

---

# 📖 Overview

Managing the same image in multiple places can become repetitive and error-prone.

**ACF Image Sync** solves this problem by automatically synchronizing images between:

- WordPress Featured Image
- ACF Image Field

This ensures consistency across your website while reducing manual work for content editors.

---

# ✨ Features

✅ Automatically sync Featured Image → ACF Image Field

✅ Automatically sync ACF Image Field → Featured Image

✅ Supports Custom Post Types

✅ Works seamlessly with Advanced Custom Fields

✅ Lightweight and developer-friendly

✅ Easy installation

✅ No database modifications

✅ Clean and maintainable codebase

---

# 🚀 Why Use This Plugin?

Many WordPress projects use ACF image fields alongside the default Featured Image.

Without synchronization, editors often have to upload or select the same image twice.

This plugin helps you:

- Save time
- Reduce human error
- Keep images consistent
- Improve editor experience

---

# ⚙️ Requirements

| Requirement | Version |
|------------|----------|
| PHP | 8.0+ |
| WordPress | 6.0+ |
| Advanced Custom Fields | Latest Recommended |

---

# 📦 Installation

## 1. Clone Repository

```bash
git clone https://github.com/singhdigvijay99/acf-image-sync.git
```

---

## 2. Upload Plugin

Copy the plugin folder into:

```
wp-content/plugins/
```

---

## 3. Activate Plugin

Go to:

```
WordPress Admin
→ Plugins
→ ACF Image Sync
→ Activate
```

---

## 4. Configure Your ACF Field

Create an Image Field in ACF.

Example:

| Field Label | Field Name |
|-------------|------------|
| Featured Image | featured_image |

Update the field key inside the plugin if necessary.

---

# 🔄 How It Works

```text
        Upload Image
              │
              ▼

     ┌─────────────────┐
     │  Featured Image │
     └─────────────────┘
              │
              ▼

     ┌─────────────────┐
     │   ACF Image     │
     └─────────────────┘

              ▲
              │

     Changes remain synchronized
```

---

# 📂 Project Structure

```
acf-image-sync/
│
├── assets/
├── includes/
├── admin/
├── languages/
├── acf-image-sync.php
├── uninstall.php
└── README.md
```

*(Modify according to your actual repository structure.)*

---

# 💡 Use Cases

## Agency Projects

Maintain consistent images across multiple templates.

## Custom Themes

Sync ACF image fields with WordPress native functionality.

## Client Websites

Prevent clients from accidentally using different images.

## WooCommerce Extensions

Can be adapted for custom product image workflows.

---

# 🛠️ Example Workflow

### Editor uploads Featured Image

```
Featured Image
      │
      ▼
Plugin Detects Update
      │
      ▼
ACF Image Field Updated Automatically
```

---

### Editor updates ACF Image Field

```
ACF Image Field
        │
        ▼
Plugin Detects Change
        │
        ▼
Featured Image Updated
```

---

# 🎯 Learning Concepts Demonstrated

This project showcases practical WordPress development concepts:

- [x] WordPress Hooks
- [x] Actions & Filters
- [x] Plugin Development
- [x] Custom Post Types Support
- [x] Advanced Custom Fields Integration
- [x] Media Library Handling
- [x] Attachment IDs
- [x] WordPress Metadata API
- [x] PHP OOP Concepts
- [x] Clean Plugin Architecture

---

# 🔧 Future Improvements

- [ ] Multiple ACF Field Support
- [ ] Admin Settings Panel
- [ ] Select Sync Direction
- [ ] Bulk Image Synchronization
- [ ] Logging & Debug Mode
- [ ] WP-CLI Commands
- [ ] WooCommerce Compatibility

---

# 🤝 Contributing

Contributions are welcome!

## Steps

```bash
# Fork repository

# Clone
git clone https://github.com/your-username/acf-image-sync.git

# Create branch
git checkout -b feature/new-feature

# Commit
git commit -m "Added new feature"

# Push
git push origin feature/new-feature
```

Then create a Pull Request.

---

# 🧪 Development Setup

Requirements:

- PHP 8+
- WordPress Local Environment
- XAMPP / LocalWP / Laragon
- Advanced Custom Fields Plugin

Recommended VS Code Extensions:

- PHP Intelephense
- WordPress Snippets
- EditorConfig
- GitLens

---

# 📈 Roadmap

## Version 1.0

- Automatic synchronization
- ACF integration
- Featured image support

## Version 1.1

- Settings page
- Custom field selection

## Version 2.0

- Bulk sync
- Logging
- WP CLI support
- Multiple image field mapping

---

# 📚 Related Technologies

- PHP
- WordPress
- Advanced Custom Fields (ACF)
- MySQL
- WordPress Hooks API
- Plugin Development

---

# 👨‍💻 Author

## Digvijay Singh

### 🌐 Portfolio

https://singhdigvijay99.github.io/portfolio/

### 💻 GitHub

https://github.com/singhdigvijay99

---

# ⭐ Show Your Support

If this project helped you, please give it a ⭐ on GitHub.

It motivates future development and helps others discover the project.

---

# 📜 License

This project is licensed under the MIT License.

You are free to use, modify, and distribute it.

---

<div align="center">

## 🚀 Build Better WordPress Experiences

### Less Manual Work • More Automation

Made with ❤️ by **Digvijay Singh**

</div>
