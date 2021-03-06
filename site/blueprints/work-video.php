<?php if(!defined('KIRBY')) exit ?>

title: Work - Video
pages: false
files:
  sortable: true
fields:
  generalinfo:
    label: General Information
    type: headline
  title:
    label: Project Title
    type:  text
    help:  (homepage, work page, and landing subtitle)
  tags:
    label: Tags
    type:  text
    help: it will appear only on hover (home page & work page)
  h1:
    label: Landing title
    type:  text
    default: Video & Photography
  categories:
    label: Categories
    type: checkboxes
    options:
      digital: Digital
      video: Video
      photography: Photography
    default: video
    help: For the work page filter
  sidebarcontent:
    label: Sidebar Content
    type: headline
  client:
    label: Client
    type:  text
  services:
    label: Services
    type:  tags
  website:
    label: Website url
    type:  url
  location:
    label: Location
    type: text
  casestudycontent:
    label: Case Study Content
    type: headline
  subtitle:
    label: Case Study title
    type:  text
  text:
    label: Case Study text
    type:  textarea
  info3:
    label: Assets
    type: headline
  aboutvideo:
    label: Vimeo videos
    type: info
    text: >
      In order to add a Vimeo video, you must paste the embed code. It should start with:

       https://player.vimeo.com/*****

      Remember to switch off the autoplay or the video will play as soon as the page is loaded.


      Add images to create video placeholders with aplay button. 

      You can name them as you want as long as they start by ''1'' or ''2''.
  vimeo1:
    label: Vimeo url 1
    type:  url
    width: 1/2
  vimeocaption1:
    label: Vimeo caption 1 (optional)
    type:  text
    width: 1/2
  vimeo2:
    label: Vimeo url 2
    type:  url
    width: 1/2
  vimeocaption2:
    label: Vimeo caption 2 (optional)
    type:  text
    width: 1/2
  vimeo3:
    label: Vimeo url 3
    type:  url
    width: 1/2
  vimeocaption3:
    label: Vimeo caption 3 (optional)
    type:  text
    width: 1/2
  vimeo4:
    label: Vimeo url 4
    type:  url
    width: 1/2
  vimeocaption4:
    label: Vimeo caption 4 (optional)
    type:  text
    width: 1/2
  vimeo5:
    label: Vimeo url 5
    type:  url
    width: 1/2
  vimeocaption5:
    label: Vimeo caption 5 (optional)
    type:  text
    width: 1/2
  vimeo6:
    label: Vimeo url 5
    type:  url
    width: 1/2
  vimeocaption6:
    label: Vimeo caption 5 (optional)
    type:  text
    width: 1/2