# 📼 Modoki for ReviveToday
Subtle but important changes in the sake of functionality from [the previous design](https://github.com/ReviveToday/sparkling-child).
![Screenshot of Modoki](screenshot.png)

This theme is built to depend on [**GeneratePress**](https://generatepress.com/). The **[FontAwesome plugin is required](https://en-gb.wordpress.org/plugins/font-awesome/)** for shareblocks and alerts to show correctly.

# Functionality
## 🕰️ Shareblocks & Last Updated Display
![Last updated and shareblocks](https://user-images.githubusercontent.com/11209477/125115433-3b2dfe00-e0e3-11eb-90d0-bce30a17949f.png)

Optional per-page feature to show the last updated date of the content, and/or common social media share blocks. **On browsers with agressive ad-blockers, the shareblocks may not show up correctly.**

## 🌚 Dark Mode
![Dark mode toggle switch](https://user-images.githubusercontent.com/11209477/125115880-d9ba5f00-e0e3-11eb-8476-d71532acdd3a.png)

A dark mode switch is now integrated into the toolbar alongside search. This will toggle the `dark-mode` class on the `body` tag.

## ⚠ Alert boxes
![Alert boxes ranging from good to aaaahhh everything's on fire](https://user-images.githubusercontent.com/11209477/125116403-96acbb80-e0e4-11eb-8a69-4b8339f0af98.png)

A great way to highlight some important information. Add a custom `rt-alert` class to a paragraph block, with the addition of `info`, `success`, `warning` or `error`.

## 💥 Pop Banner
![Example of the pop and enhance boxes](https://user-images.githubusercontent.com/11209477/125116739-0f137c80-e0e5-11eb-9f6b-660084d7bfc4.png)

A similar looking homepage banner image can be achieved with the **Cover** block, a couple of **Paragraph** blocks, and these lovely additional CSS classes. `rt-pop` will make the button-styled pop-out header, and `rt-enhance` will surround the box in a slightly transparent black square. Whatever page set to **homepage** will have all top-level padding removed, so the cover image can go up against the header bar.
