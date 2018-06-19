# Code Katas

### Installation

#### Requirements
* PHP 7.1 or greater
* or [Vagrant](https://www.vagrantup.com/)
* or [Docker](https://www.docker.com/community-edition#/download)

#### With PHP >= 7.1
* Run `composer install`
* Get coding!

#### With Vagrant
* Run `vagrant up`
* SSH into the VM: `vagrant ssh`
* Follow the steps under "With PHP"

#### With Docker
* Use the binary at `./bin/composer` (from the project root) to run Composer commands.
* Use `./bin/composer run-script [test|check]` to run the `test` and `check` scripts.

NOTE: only tested with Docker CE 18.03 in OSx 10.13.5, but it should work in other OSx versions and Linux.

WINDOWS: read the contents of `./bin/composer` and adapt for your OS.

### Guidelines

1. Start by the first Kata (K01) and work your way down.
2. Each Kata has a `README.md` with the assignment.
3. For an extra challenge, don't move to the next Kata until you finished with the previous one.  
4. Increase your chances of solving a Kata by working together with someone else!
