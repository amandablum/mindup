# mindup theme dev

### env doc
- [Bugs & Issues](https://github.com/amandablum/mindup/issues/)**
- Branch: `[develop](https://github.com/amandablum/mindup/tree/develop)` for onging development.
- Branch: `[master](https://github.com/amandablum/mindup/tree/master)` for production ready only; deployed via deploybot.
- **Process** Test everything in `develop` and/or `hotfix/{patch-name}` or `feature/{feature-name}` created from develop and merge/PR back into `develop`. Once ready for production create a [Pull Request](https://github.com/amandablum/mindup/compare) to master for review. Once accepted and merged, deploybot will see the changes and do its magic to pagely.

### Production
- site: https://mindup.org
- loc: hosting is at pagely.com. [Dashboard](https://atomic.pagely.com/apps/details/18772)
- deploy:
	- handled by [deploybot](https://howlingzoe.deploybot.com)
	- once master is updated deploybot does its thing.

### dev doc
1. `pagebuilder` built in ACF. Within each module the only option is whether you're using an image or video
  1. 1 column image bg, h1 text, h2 text and CTA button
  2. 1 column video
  3. 2 column image/video left, copy right with headline and CTA button
  4. 2 column copy left, image/video right with headline and CTA button
  5. 3 column, with each column having an image or video, headline, copy and CTA button
  6. centered copy which is a headline, copy an CTA button
  7. call out which is 2 lines of copy on a colored background
  8. `constellation` which is 5 data points, each having an icon, image, copy and CTA, displayed per graphic
2. Custom Post Types for White Papers and Videos (we might consider if this can utilize posts w some additional fields instead)
3. Custom archive for white papers and videos (*we're calling this the repo*)
4. Archives for Blog (*repo without the sidebar*)
5. Single post file for white paper/video/blog (*all the same*)
6. A page template for us to use that will just display the pagebuilder elements
7. Full width page template
8. Full width page template w a right sidebar
