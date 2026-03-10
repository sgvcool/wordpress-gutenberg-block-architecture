# Technical Decisions

This example demonstrates several architectural decisions commonly used in larger WordPress projects.

## Why Gutenberg blocks

Modern WordPress development increasingly relies on the block editor. Building reusable blocks allows editorial teams to compose pages flexibly without developer involvement.

## Why server-side rendering

Server-side rendering ensures:

• SEO-friendly output  
• consistent markup  
• reduced client-side complexity  

It is particularly useful when blocks display dynamic data.

## Why extract a service layer

Instead of embedding WP_Query logic directly in blocks, the logic is extracted into a reusable service class.

Benefits:

• code reuse across multiple blocks  
• easier testing  
• centralized performance optimization  

## Why use block.json

Using block.json follows the modern WordPress standard for registering blocks.

Benefits:

• automatic asset registration  
• improved maintainability  
• compatibility with future WordPress updates

## Performance considerations

The example query uses several WordPress performance optimizations:

• no_found_rows  
• disabled meta cache  
• disabled term cache  

These settings help reduce unnecessary database work when pagination or taxonomy data are not needed.