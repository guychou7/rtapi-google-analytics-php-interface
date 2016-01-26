# RTAPI for Google analytics like GAPI

Instructions for setting up a Google service account for use with GAPI

GAPI (because now Google Analytics API only supports OAuth2) will require you to create a 'service account' and then download a .P12 file to upload to your application.

Create a Google Developers project
Create service account under this project, see instructions
Download the .p12 file for this service account, upload to the same folder as gapi.class.php
Enable 'analytics API' in the Google Developers console
In Google Analytics Administration > User Management, give the service account 'Read and Analyse' permissions on the analytics accounts you want to access
