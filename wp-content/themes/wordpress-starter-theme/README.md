## What is needed for this

Install [NodeJS](https://nodejs.org/en/)
Editor plugin [Editorconfig](http://editorconfig.org)

## Project start

Edit the `projectConfig.json` file to specify your development domain.

Open this folder in console and install dependencies

```bash
npm install
npm install -g gulp-cli (if not installed)
```

After that, we use the available commands

## Available commands

`gulp` - Launch a development project, proxy server, and watch files
`gulp build` - style minification

## Topic structure

```
wordpress-starter-theme/
├── /assets/ # Theme resources.
│ ├── /css/ # CSS libraries.
│ ├── /dist/ # Compiled styles (Never edited).
│ ├── /fonts/ # Fonts.
│ ├── /images/ # Images.
│ ├── /scripts/ # Project scripts.
│ └── /sass/ # See the folder structure below.
├── /include/ # PHP files are included in function.php
├── /node_modules/ # Node modules. (Never edited).
├── /template-parts/ # Templates that are used on the pages.
│ ├── comments.php # Template for displaying comments.
│ ├── content-none.php # Used if there are no posts.
│ ├── content-page.php # Display page content.
│ ├── content-search.php # Template for displaying search results.
│ ├── content-single.php # Display the content of the post.
│ ├── content.php # Template for displaying posts.
│ ├── head.php # The content of the head tag.
│ └── sidebar.php # Sidebar content.
└── .editorconfig # Editor configuration.
└── .gitignore
└── 404.php # Page 404.
└── footer.php
└── function.php
└── gulpfile.js # Configuration for Gulp.
└── header.php
└── index.php # Displays the latest blog posts.
└── package.json # Packages for NPM.
└── page.php # Template for all pages.
└── projectConfig.json # Project configuration.
└── screenshot.png # Screenshot for the admin panel.
└── search.php # Template for displaying search results.
└── single.php # Post template.
└── style.css # To define a theme.
└── template-custom.php # Template for the page (Example).
```

## sass folder structure

```
sass/
├── /block/ # Styles for repeating blocks.
├── /elements/ # Styles for elements.
├── /pages/ # Styles for pages.
└── _base.scss # Base styles. Box sizing.
└── _mixins.scss # Mixins.
└── _typography.scss # Project typography.
└── _variables.scss # Variables.
└── _wp-classes.scss # Styles for standard WP elements.
└── main.scss # File to compile.
```