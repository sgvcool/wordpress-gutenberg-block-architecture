# WordPress Gutenberg Block Architecture Example

This repository demonstrates a simplified architecture for building reusable Gutenberg blocks in WordPress projects.

The goal of this example is to illustrate how scalable WordPress blocks can be implemented while keeping the code maintainable, well-structured, and easy for teams to extend.

The example includes:

- a custom Gutenberg block
- server-side rendering
- a reusable service layer
- documentation explaining architectural decisions

This structure reflects patterns commonly used in larger WordPress projects.

---


---

# Architecture Overview

The example demonstrates a layered approach to WordPress development.

Gutenberg Block (React editor)
↓
Server-side rendering (PHP)
↓
Service layer (Post Fetcher)
↓
WordPress Query API
↓
Database



### Key Principles

**Separation of concerns**

- blocks focus on presentation
- services handle data retrieval

**Reusable services**

Business logic is extracted into reusable classes instead of being embedded directly inside templates or blocks.

**Server-side rendering**

Dynamic content is rendered on the server to ensure:

- SEO-friendly output
- consistent markup
- simplified frontend logic

**Modern WordPress APIs**

The block uses the modern `block.json` configuration introduced in recent versions of WordPress.

---

# Example Block

The repository contains a dynamic Gutenberg block called **Content Grid**.

The block allows editors to:

- display a list of posts
- control the number of posts
- configure grid columns

The block retrieves posts using a dedicated service class (`Post Fetcher`).

This pattern keeps the block simple and allows data logic to be reused elsewhere.

---

# How to Use This Example in WordPress

This repository contains a simplified example of a custom Gutenberg block plugin.

To test the block in a WordPress environment, follow the steps below.

## 1. Copy the Plugin Files

Copy ew-custom-blocks directory into your WordPress plugins folder


---

## 2. Activate the Plugin

In the WordPress admin panel:

Plugins → Installed Plugins → EW Custom Blocks → Activate


---

## 3. Add the Block in the Editor

Open the Gutenberg editor and insert the block:

Add Block → Content Grid



---

## 4. Configure the Block

The block provides editor controls for:

- number of posts to display
- number of grid columns

These settings can be configured in the block sidebar.

---

# Documentation

Additional documentation is included in the repository:

| File | Description |
|-----|-------------|
| docs/architecture.md | Overview of the architectural approach |
| docs/technical-decisions.md | Explanation of key implementation decisions |
| docs/plugin-development.md | Notes on WordPress plugin development approach |

---

# Case Studies

The repository also contains simplified examples of real-world scenarios:

| File | Description |
|-----|-------------|
| case-studies/performance-optimization.md | Example of performance improvements in a WordPress project |
| case-studies/interpersonal.md | Example of handling a challenging client situation |

---

# WordPress Development Approach

When building WordPress solutions, I typically focus on:

- maintainable architecture
- clear documentation
- reusable components
- performance considerations
- collaborative development

These principles help ensure that WordPress projects remain sustainable for teams and clients over time.

---

# License

This repository is provided for demonstration purposes.