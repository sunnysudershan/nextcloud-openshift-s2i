# nextcloud-openshift-s2i
Get NextCloud ready to run on OpenShift with added capability

## Quick Start

$ oc new-app quay.io/cuppett/ubi8-php73~https://github.com/cuppett/nextcloud-openshift-s2i.git

    --> Found container image from quay.io for "quay.io/cuppett/ubi8-php73"
        Apache 2.4 with PHP 7.3 
        ----------------------- 
        PHP 7.3 available as container is a base platform for building and running various PHP 7.3 applications and frameworks. PHP is an HTML-embedded scripting language. PHP attempts to make it easy for developers to write dynamically generated web pages. PHP also offers built-in database integration for several commercial and non-commercial database management systems, so writing a database-enabled webpage with PHP is fairly simple. The most common use of PHP coding is probably as a replacement for CGI scripts.
    
        Tags: builder, php, php73, php-73
    
        * An image stream tag will be created as "ubi8-php73:latest" that will track the source image
        * A source build using source code from https://github.com/cuppett/nextcloud-openshift-s2i.git will be created
          * The resulting image will be pushed to image stream tag "nextcloud-openshift-s2i:latest"
          * Every time "ubi8-php73:latest" changes a new build will be triggered

    --> Creating resources ...    
        imagestream.image.openshift.io "ubi8-php73" created
        imagestream.image.openshift.io "nextcloud-openshift-s2i" created
        buildconfig.build.openshift.io "nextcloud-openshift-s2i" created
        deployment.apps "nextcloud-openshift-s2i" created
        service "nextcloud-openshift-s2i" created

    --> Success
        Build scheduled, use 'oc logs -f bc/nextcloud-openshift-s2i' to track its progress.
        Application is not exposed. You can expose services to the outside world by executing one or more of the commands below:
         'oc expose svc/nextcloud-openshift-s2i' 
        Run 'oc status' to view your app.
    
$ oc expose svc/nextcloud-openshift-s2i
    
    route.route.openshift.io/nextcloud-openshift-s2i exposed