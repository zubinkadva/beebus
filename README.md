# beebus
## Bee Business. 

### What is tihs?
Developed as a freelancing project entirely by me (of course using a theme). Used for mantaining locations of bee hives on a map.

### Map?
This project uses the Google Maps API library. It generates a map with capabilities to add / edit markers (login required). These markers can be identified as having a gate or not. Different marker icons are used for this purpose for easy distinguishing.

### AJAX
This is an entirely AJAX system. The only time I refresh the page is when adding / editing markers (I am thinking of a workaround).

### Dropzone
This system also supports drag drop for file uploads.

### Security
Security wise, most AJAX requests are POST requests, with in built Laravel security. Uploaded images are stored with encrypted names. Passwords are also encrypted (duh..). All IDs are passed to controller information in an encrypted manner. Basically all sensitive information is encrypted to avoid any vulnerabilities in the system.
