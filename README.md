# DKAN Roles
Provide Base roles for an Open Data Portal using the DKAN set of modules.

## Provided Roles
### Manager
The highest level for non-technical users. A site manager is mostly concerned
with the admin functions of the site. Typically this will fall to someone in a
supervisory role. The site manager takes a high-level view of the site, its
content, and the users on the site. This person is able to make general
configurations to the site and assigns roles to new users but does not deal
with the technical configuration of the backend.

Permissions:

- Create, edit, delete all content types created by any user.
- Assigns roles to all user levels, but cannot create new roles/perms.
- Manage site logo, name, slogan, copyright, colors, fonts, main menu, dataset forms and previews.

### Editor
This will typically be a person handling the content on a frequent basis.
Someone in your organization with expertise on the subject-matter that is
expansive as well as in-depth. An editor role is similar to a content creator
role because the focus is on content, however, an editor will have the ability
to manage and edit content added by others. The editor role does not go further
into administrative functions.

Permissions:

- Create dataset, resource.
- Edit, delete, and manage versions of content added by other users.


### Submitter
Content Creators can add content to the site. This will be someone working in
your organization who helps by adding to the data catalogue but is not
responsible for anything more. This level of access takes users into the
production side of the site, but gives little freedom to move outside of
creating and adding certain content types. Limiting this role is critical for
avoiding inadvertent damage to site content.

Permissions:

- Create dataset, resource, data story, and data dashboard content.
- Edit own content (can not edit content added by another user).
- View own unpublished content and revision history of all published content.
