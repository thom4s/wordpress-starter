# Custom WordPress Starter Theme

Welcome to the Custom WordPress Starter Theme! This theme is designed to provide a solid foundation for developing custom WordPress themes.

## Features

- **Customizable**: Easily modify and extend the theme to fit your needs.
- **Modern Workflow**: Utilizes modern development tools and practices.
- **SEO Friendly**: Built with SEO best practices in mind.

## Installation

1. **Download the Theme**: Clone or download this repository to your local machine.
    ```bash
    git clone https://github.com/thom4s/wordpress-starter.git
    ```

2. **Upload to WordPress**: Upload the `custom-theme` folder to the `/wp-content/themes/` directory of your WordPress installation.

3. **Activate the Theme**: Go to the WordPress admin dashboard, navigate to Appearance > Themes, and activate the Custom Theme.

## Development

### Prerequisites

- Node.js
- npm (Node Package Manager)

### Setup

1. **Install Dependencies**: Navigate to the theme directory and run:
    ```bash
    npm install
    ```

2. **Start Development Server**: Run the following command to start the development server:
    ```bash
    npm start
    ```

3. **Build for Production**: When you're ready to deploy, run:
    ```bash
    npm run build
    ```