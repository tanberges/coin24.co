# You can use a docker image from Docker Hub as your own container
# registry Hub as your build environment.
image: samueldebruyn/debian-git
 
pipelines:
  default:
    - step:
        script: # modify the commands below to build your repository
          - apt-get update
          - apt-get -qq install git-ftp
          - git ftp push --user $FTP_USERNAME --passwd $FTP_PASSWORD ftp.feferes.net/coin24.co
