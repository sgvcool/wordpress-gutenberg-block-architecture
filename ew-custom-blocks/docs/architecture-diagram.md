# Architecture Diagram

```mermaid
flowchart TD

Editor["Gutenberg Block (React)"]
Render["Server Rendering (PHP)"]
Service["Service Layer (Post Fetcher)"]
WP["WordPress Query API"]
DB["Database"]

Editor --> Render
Render --> Service
Service --> WP
WP --> DB