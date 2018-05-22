This module can be used for managing shield module https://www.drupal.org/project/shield, which provides the basic authentication for entering your project. 
Usually the new drupal release uncovers the new vulnerabilities. If you don`t want to update your project immediately, it`s time to close it by shield. Protector module checks the available updates, automatically enables shield if they are present and disables it if your core matches the last release.

Dependencies: shield

How to use:
1. After installing the Protector enter to /admin/config/system/shield, where you will create the new Shield configuration.
2. Enter the User and Password in credentials section (User is required)
3. Protector provides the new radio buttons in General Settings section "Enabled" and "Disabled".
4. Use "Enabled" if you want Shield to work continuously, regardless of the availability of updates.
5. Use "Disabled" if you want Shield to work only if there is new update avaialable and new vulnerabilies are uncovered.
6. After saving the configuration Protector keeps User and Password inside for further usage. They will be rewritten only after the next saving.
7. Protector checks the available updates every cron running.
8. If there is new drupal release, Protector enters User and Password from its memory to Shield configuration and locks the site.
9. It your drupal core is updated to the latest release Protector clears the shieeld configuration and unlocks the site
