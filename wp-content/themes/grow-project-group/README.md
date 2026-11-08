# Grow Project Group - WordPress theme

This is a traditional WordPress theme, not a custom application. No custom APIs, logins, database models or external integrations are included.

## Install
1. In WordPress Admin go to Appearance > Themes > Add New > Upload Theme. Upload `grow-project-group-theme.zip` from the release folder.
2. Activate `Grow Project Group`. The theme creates 14 WordPress page entries and sets the homepage. No existing matching pages are overwritten.
3. In Settings > Permalinks select `Post name` and save.
4. Review all image rights, planning claims and the site content.
5. Replace demonstration enquiry form with an approved WordPress contact form plugin only when needed. The current form is demonstration-only.

## Editing
Design and editorial copy currently live in `templates/content/*.php`. General WordPress pages are created to supply URLs. This is intentionally a static content first implementation; future versions can migrate copy to the WordPress editor.

## Publication gates
Artistic concepts and third-party reference images are not approved marketing photography. Confirm licences, approvals and project naming before public use.
## Edit content and imagery through WordPress
- Pages: add content with the native WordPress block editor. Any non-empty page content takes precedence over the bundled page template. Clear editor content to restore the designed template.
- Featured Image: assign a featured image to a project page to replace its main hero image, where present. Home page supports the same mechanism.
- For exact design preservation, update theme PHP templates rather than replacing them with generic blocks.
- The enquiry form is demonstration-only and does not send data. Configure an approved WordPress form plugin separately when authorised.
