set -e

echo "Deploying application ..."

# Enter Maintenance Mode
(php artisan down --message 'The app is being Quickly Updated. Please Refresh Again')

    #update codebase
    git pull origin master

#
php artisan up

echo "Application Deployed Successfully"
