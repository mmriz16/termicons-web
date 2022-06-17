# Termicons

_High Quality Web Icon Design_

'Termicons' is a carefully designed open source iconset with 1500+ icons. It's crafted to look enrich your website/app experience.

_Announcing Termicons v1.0.0_

- Fixed the errors with a few svgs, added viewbox
- Added 22 new icons

## Installation

To install via npm, simply do the following:

```bash
$ npm install termicons --save
```
import the modul

```bash
import 'termicons';
```

## Usage

### Using via CSS

1. Include the stylesheet on your document's `<head>`

```html
<head>
  <link rel="stylesheet" href="termicons.min.css">
</head>
```

instead of installing you may use the remote version

```html
<head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
  <!-- or -->
  <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
</head>
```

2. To use an icon on your page, add a class 'ti' and seperate class with the icons name with a prefix 'ti-' for regular icons, 'tis-' for solid icons and 'til-' for logos:

```html
<i class="bx bx-hot"></i>
<i class="bx bxs-hot"></i>
<i class="bx bxl-facebook-square"></i>
```

### Using via Web Component

Termicons includes a Custom Element that makes using icons easy and efficient. To use it, add the `box-icon-element.js` file to the page:

```html
<script src="https://unpkg.com/boxicons@2.0.9/dist/boxicons.js"></script>
```

To use an icon, add the `<term-icon>` element to the location where the icon should be displayed:

```html
<term-icon name="hot"></term-icon>
```

To use solid icons or logos add attribute `type` as solid or logo before the name

```html
<term-icon type="solid" name="hot"></term-icon>
<term-icon type="logo" name="facebook-square"></term-icon>
```

the `<term-icon>` custom element supports the following attributes:

```html
<term-icon
    type = "regular | solid | logo"
    name="adjust | alarms | etc...."
    color="blue | red | etc..."
    size="xs | sm | md | lg | cssSize"
    rotate="90 | 180 | 270"
    flip="horizontal | vertical"
    border="square | circle"
    animation="spin | tada | etc..."
    pull = "left | right"
></term-icon>
```

- `type` : Should always be first and be one of the following values: `reguler`, `solid`, `logo`
- `name` : (REQUIRED) the name of the icon to be displayed
- `color` : A color for the icon
- `size` : The size for the icon. It supports one of two types of values:
    - One of the following shortcuts: `xs`, `sm`, `md`, `lg`
    - A css unit size (ex. 60px)
- `rotate` : one of the following values: `90`, `180`, `270`
- `flip` : one of the following values: `horizontal`, `vertical`
- `border` : one of the following values: `square`, `circle`
- `animation` : One of the following values: `spin`, `tada`, `flashing`, `burst`, `fade-left`, `fade-right`, `spin-hover`, `tada-hover`, `flashing-hover`, `burst-hover`, `fade-left-hover`, `fade-right-hover`
- `pull` : one of the following values: `left`, `right` The Custom Element class (`BoxIconElement`) exposes the following static members:
- `tagName` : property that holds the HTML element tag name. Default: `box-icon`
- `defined([tagName])` : Defines the Element in the custom element registry using either the tagName provided on input or the (default) the one defined on the Class.
- `cdnUrl` : property that holds the URL that will be used to retrieve the images. URL should point to the folder that contains the images. example: `//unpkg.com/termicons@1.0.0/svg` (no trailing forward slash)
- `getIconSvg` : method used to retrieve the SVG image. Should return a Promise that resolves with the SVG source (String).

[Check out all the icons here!](https://termicons.com)

## Contributing

### Code Contributors
This project exists thanks to all the people who contribute. [[Contribute](CONTRIBUTING.md)].

<a href="https://github.com/mmriz16/Termicons/graphs/contributors"><img src="https://opencollective.com/termicons/contributors.svg?width=890" /></a>

### Financial Contributors

Become a financial contributor and help us sustain our community. [[Contribute](https://opencollective.com/termicons/contribute)]

#### Individuals

<a href="https://opencollective.com/termicons"><img src="https://opencollective.com/termicons/individuals.svg?width=890"></a>

#### Organizations

Support this project with your organization. Your logo will show up here with a link to your website. [[Contribute](https://opencollective.com/termicons/contribute)]

## License

- The icons (.svg) files are free to download and are licensed under CC 4.0 By downloading it is assumed that you agree with the terms mentioned in CC 4.0.
- The fonts files are licensed under SIL OFL 1.1.
- Attribution is not required but is appreciated.
- Other files which are not fonts or icons are licensed under the MIT License.

[You can read more about the license here!](https://termicons.com/get-started#license)

## Contributing

Pull requests are the way to go here. I apologise in advance for the slow action on pull requests and issues.

Caught a mistake or want to contribute to the documentation? [Edit this page on Github](https://github.com/mmriz16/termicons/blob/master/README.md)