## Getting Started

This project is based on BLT, an open-source project template and tool that enables building, testing, and deploying Drupal installations.

### System Requirements

> Also see [BLT Documentation](https://blt.readthedocs.io/en/latest/INSTALL/) for a more detailed explanation.

You must have the following tools on the command line of your host operating system:

- Git
- Composer
- PHP 5.6+ (though PHP 7.1+ is recommended)
- Vagrant
- Virtual Box

Download and install [Vagrant](https://www.vagrantup.com/downloads.html) and [VirtualBox](https://www.virtualbox.org/wiki/Downloads).

Ensure that Xcode is installed (primarily in order to support Homebrew). On OSX 10.9+ you can install Xcode with:

    sudo xcodebuild -license
    xcode-select --install

Then install the minimum dependencies for BLT. The preferred method is via Homebrew, though you could install these yourself without a package manager.

    /usr/bin/ruby -e "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/master/install)"
    brew install php71 git composer
    composer global require "hirak/prestissimo:^0.3"

The demo uses Drupal VM with BLT, and requires the following additional libraries.

    brew tap caskroom/cask
    brew cask install virtualbox vagrant
    vagrant plugin install vagrant-hostsupdater

Instructions for installing all requirements for various operating systems are listed below. In general, make sure all installed tools are the most recent version unless otherwise noted.

1. Fork this project repository in GitHub.
1. Request access to the Acquia Cloud Environment for your project (if needed).
1. Setup a SSH key that can be used for GitHub and the Acquia Cloud (you CAN use the same key).
    1. [Setup GitHub SSH Keys](https://help.github.com/articles/adding-a-new-ssh-key-to-your-github-account/)
    1. [Setup Acquia Cloud SSH Keys](https://docs.acquia.com/acquia-cloud/ssh/generate)
1. Clone your forked repository. By default, Git names this "origin" on your local.
    ```
    $ git clone git@github.com:<account>/#GITHUB_PROJECT.git
    ```
1. All subsequent steps assume you are in the project directory (`cd #GITHUB_PROJECT`).

1. To ensure that upstream changes to the parent repository may be tracked, add the upstream locally as well.
    ```
    $ git remote add upstream git@github.com:#GITHUB_ORG/#GITHUB_PROJECT.git
    ```
1. Install Composer Dependencies. (Warning: this can take some time based on internet speeds.)
    ```
    $ composer install
    ```
1. If this is your first time using BLT on this machine, restart your shell so that Bash detects the new BLT alias.

1. Customize blt/blt.yml.  Specifically, make sure the machine name is unique:
    ```
    project:
         machine_name: presales-blt
         prefix: BLT
         human_name: 'Presales BLT Demo'
         profile:
           name: lightning
         local:
           protocol: http
           hostname: 'lc.${project.machine_name}'
    ```
1. You will also need to replace the remote url to your appropriate application domain.
    ```
       git:
         default_branch: develop
         remotes:
           acquia: #YOUR_ACQUIA_CLOUD_DOMAIN
    ```

           