# zettalabs
Website for my software agency, Zetta Labs
https://zettalabs.co



The purpose of this repository is to store backups of Zetta Labs' website. 
Backups have been taken usiing multiple methods. 

1. Through Updraft Plus. Automatically saving to Google Drive (of my personal gmail account), in the folder UpdraftPlus.
2. Through Duplicator. Added to repo, in the folder duplicator_zettalabs.
  I have tested this method as well, and it works well, although the steps are a bit convuluted. Writing them down here in case I need to do this again.
  a. On the original website, add the Duplicator plugin and create a backup (the archive file and installer exist in this repo in duplicator_zettalabs, so this step does not need to be repeated)
  b. Use this link to set up SFTP with AWS Lightsail (https://medium.com/@netmowau/how-to-connect-aws-lightsail-ftp-with-filezilla-b943b800a8f7). Important to remember that the SFTP host name is the static IP of our website.
  c. Copy and paste the installer and archive file in /home/bitnami/stack/wordpress and /opt/bitnami/wordpress respectively. 
  d. Go to website/installer.php
  e. For the database go with 'Use Existing Databse' option and you might have to change localhost with ipAddress:3306
  f. Click Next
  g. You will be asked to sign in. Use the username and password of the original website. 
  h. You're all set. 
3. Manually through FTP. Added to repo, in the folder ftp_zettalabs.
