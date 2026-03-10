# Gutenberg Block Architecture Example

This repository demonstrates a simplified architecture used to build reusable Gutenberg blocks in WordPress.

The goal of this example is to illustrate how scalable WordPress blocks can be implemented while keeping the code maintainable and well documented.

Key concepts demonstrated:

• modern block.json API  
• server-side rendering  
• reusable services  
• separation of concerns  

The example block implements a dynamic content grid that retrieves posts using a dedicated service class.

Architecture overview:

Editor (React block)
↓
Server rendering (PHP)
↓
Service layer (Post Fetcher)
↓
WordPress Query API