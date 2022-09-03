
# LibSignTool - Library Digital Signage System using Kirby
A Simple and flexible digital signage and OPAC greeter built for public terminals using [KirbyCMS](https://getkirby.com)

## Features

- Auto Detection of Landscape or Portrait Display for default campaign
- Manually Choose orientation via URL Path
- Capability for multiple slideshow campaigns organized by a tagging system
- Web-based live slides for tasks such as calendar events or event goals
- Capability for multiple source image galleries
- Built-in Greeter page with easily customizable Link Buttons
- Start and stop date system for pre-planning when Campaigns should start and end

## Download and Install

This repository only contains the content pages of the site, you will need to download the latest KirbyCMS plainkit seprately.

1. Before Starting, please check that your webserver meets KirbyCMS' minimum requirements **[listed here](https://getkirby.com/docs/guide/quickstart#requirements)** and read the provided getting started documentation.
1. Download the latest release of **[KirbyCMS Plainkit](https://github.com/getkirby/plainkit)**
1. Extract the plainkit to your Website Folder
1. Download the latest release of LibSignTool from the **[releases page](https://github.com/salinapl/LibSignTool/releases)**
1. Extract LibSignTool into the plainkit-main folder
1. Some files may ask to be overwritten, approve all overwrites.
1. Make sure hidden files such as .htaccess copied over, as these are required for the site to operate correctly.
1. Start your webserver and navigate to **yourdomain.example.com/location-of-kirbycms-install/panel** and you will be asked to create an account.
1. After creating the account, you will be able to log in and start adding images to create a campaign. The download includes example pages to get started, but you can edit or remove these pages as long as you replace them with ones using the same or similar templates. Doing more than that will require knowledge of how KirbyCMS works. Examples of what templates do what will be provided later in this document.

## A Note about Licensing

While LibSignTool is provided free and clear to use and modify, Kirby is not.

You can try Kirby on your local machine or on a test
server as long as you need to make sure it is the right
tool for your next project.

However Production use requires a License Key.

### Buying a license

You can purchase your Kirby license at
<https://getkirby.com/buy>

A Kirby license is valid for a single domain. You can find
Kirby's license agreement here: <https://getkirby.com/license>

You can learn more about Kirby at [getkirby.com](https://getkirby.com).

### Kirby Documentation

<https://getkirby.com/docs>

### Kirby Support

<https://getkirby.com/support>

## Backing up and Installing new Versions

Kirby is a Flat-file CMS and does not require a database, which makes it very easy to
install and backup. Just copy the folder you installed Kirby and LibSignTool to into your backup location to back it up.

To upgrade, simply download the newest version of the plainkit, Delete the "kirby" and "media" folders from your install folder, and copy the new versions from the plainkit into the folder. Always refer to the offical KirbyCMS documentation for upgrade instructions as these are subject to change between releases.

LibSignTool is built on KirbyCMS 3. Staying within the same generation of releases should be fine, but wait for offical word before upgrading to possible future KirbyCMS generations such as KirbyCMS 4
    
## Issues

We do not develop for KirbyCMS, for issues getting KirbyCMS up and running, please contact that project. We only provide the website content files to host on KirbyCMS to use as a Digital Signage Platform.

If you have a Github account, please report issues directly on Github: <https://github.com/salinapl/LibSignTool/issues>

Or you can email the maintainers directly at tech.lib@salinapublic.org

<img src="http://getkirby.com/assets/images/github/plainkit.jpg" width="300">
**Kirby: the CMS that adapts to any project, loved by developers and editors alike.**  
The Plainkit is a minimal Kirby setup with the basics you need to start a project from scratch. It is the ideal choice if you are already familiar with Kirby and want to start step-by-step.
