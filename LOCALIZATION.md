# Localization Notes

## Localization Strategy

I chose to embed the locale in the URI as a first segment, resulting in
`/en/download` instead of `/download`, for instance.
No cookies are needed, improving security and removing
the need for General Data Protection Regulation (GDPR) prompts.

Routing rules for the regular (localized) pages were added to `app/Config/Routes`,
and the routing isolates the requested locale and the routable part of a path.

Links to the localized pages are managed in the base controller, through the
menu construction.

Supported locales are in `app/Config/App`, but those can be over-ridden for testing
by altering the location field in your browser.

## Localization Messages

Translated messages are all in `app/Language`, in subfolders for each supported
locale. Each file there contains the messages for one main page in the website.

Text to translate is found in the array settings at the bottom of each file,
as well as in the `nowdoc`-initialized variables above those.

The `nowdoc` strings provide for more natural editing of page content.

Much of the text, and specifically the nowdoc strings, are intended to be
formatted using Markdown. This lets us focus on the content without
worrying so much about the style. A note about this ... markdown formatted
links, like `[somewhere](http://example.com/blah-blah)` 
have the link text inside square brackets (and this should be translated),
with the link address inside regular brackets (and this should not be translated).

You will see substitution fields in the material, with braces around a field name, 
like `{title}`. The field names are not to be translated - they refer, sometimes 
indirectly, to message keys or substitutions created in a controller.

The workflow to build a page segment has the controller extract all needed
text from locale-specific messages; run these through the markdown processor;
and then to pass these partially formatted results as substitution
values to the view parser, which will provide the final HTML text for the finished page.
