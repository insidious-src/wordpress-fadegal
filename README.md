#Fadegal - Universal lightweight JavaScript Slider/Carousel/Gallery/Navigator

**Example Usage**
```
#!html

<script type="text/javascript">
$(function()
{
    var popup = $(".lightbox").fadegal(
    {
        alwaysVisible:            false, // init as a popup gallery
        animation:                true,
        animationDuration:        1000,
        animationType:            "fade", // transitional animations: fade, slide, popup
        navigation:               true,
        navPrevStyle:             "#prev",
        navNextStyle:             "#next",
        itemChangeEvent:          "click", // click, hover or dblclick
    });

    var slideshow = $(".slideshow").fadegal(
    {
        animation:                true,
        animationType:            "fade",
        navigation:               false,
        navigatorFor:             [popup]
    });

    $(".thumbs").fadegal(
    {
        animation:                false,
        maxItems:                 0, // maximum visible items
        navigation:               false,
        navigatorFor:             [slideshow]
    });
});
</script>
```

#Features/Do To List
- Adapt to any configuration [~70%]
- Cyclic Navigation Binding [Done]
- Unified Animations [~80%]
- Auto-Scale [~90%]
- Pseudo-Elements Support
- Responsive Breakpoints
- Touch Events
- Key Events
- Merge matching tags array with the main one
- Cache calculations in response to certain events [WIP]
- Eliminate any direct css usage [~70%]
