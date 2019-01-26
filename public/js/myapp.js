(function () {

    var myapp = angular.module('myapp', []);

    myapp.controller('TariffeController', ['$http', function ($http) {
        var tariffeRelax = this;
        tariffeRelax.periodi = [];
        $http.get('http://www.studiocastano.it/tariffe.json').success(function (data) {
            tariffeRelax.periodi = data;
        }, function (response) {
            console.debug("Loading Json failed")
        });

    } ]);

    myapp.controller('TariffeChaletController', ['$http', function ($http) {
        var tariffeChalet = this;
        tariffeChalet.periodi = [];
        $http.get('http://www.studiocastano.it/tariffeChalet.json').success(function (data) {
            tariffeChalet.periodi = data;
        }, function (response) {
            console.debug("Loading Json failed")
        });
    } ]);

    myapp.controller('TariffeHomeController', ['$http', function ($http) {
        var tariffeHome = this;
        tariffeHome.periodi = [];
        $http.get('http://www.studiocastano.it/tariffeHome.json').success(function (data) {
            tariffeHome.periodi = data;
        }, function (response) {
            console.debug("Loading Json failed")
        });
    } ]);

    myapp.directive("sararelaxhome", function () {
        return {
            restrict: "E",
            templateUrl: "./saraRelaxHome.html",
            controllerAs: "navigationtab"
        };
    });

    myapp.directive("sararelaxchalet", function () {
        return {
            restrict: "E",
            templateUrl: "./saraRelaxChalet.html",
            controllerAs: "navigationtab"
        };
    });

    myapp.directive("sarahome", function () {
        return {
            restrict: "E",
            templateUrl: "./saraHome.html",
            controllerAs: "navigationtab"
        };
    });

    myapp.directive("prices", function () {
        return {
            restrict: "E",
            templateUrl: "./prices.html",
            controllerAs: "navigationtab"
        };
    });

    myapp.directive("contact", function () {
        return {
            restrict: "E",
            templateUrl: "./contact.html",
            controllerAs: "navigationtab"
        };
    });


    myapp.directive("tourism", function () {
        return {
            restrict: "E",
            templateUrl: "./tourism.html",
            controllerAs: "tourism"
        };
    });



    myapp.directive("navigationtab", function () {
        return {
            restrict: "E",
            templateUrl: "./navigationtab.html",
            controller: function () {
                this.tab = 1;

                this.mapLoaded = false;

                this.isSet = function (checkTab) {
                    return this.tab == checkTab;
                };

                this.setTab = function (activeTab) {

                    if (activeTab == 6 && this.mapLoaded == false) {
                        initialize('Relax')
                        this.mapLoaded = true;
                    }
                    this.tab = activeTab;
                };
            },
            controllerAs: "navigationtab"
        };
    });

    myapp.directive("locationtab", function () {
        return {
            restrict: "E",
            templateUrl: "./locationTab.html",
            controller: function () {
                this.tab = 1;
                this.isSet = function (checkTab) {
                    return this.tab == checkTab;
                };

                this.setTab = function (activeTab) {
                    //call javascript initialize
                    //if (this.tab != activeTab) {
                    if (this.tab == 1) {
                        initialize('Relax')
                    }
                    if (activeTab == 2) {
                        initialize('Home');
                    }
                    //}
                    this.tab = activeTab;
                };
            },
            controllerAs: "locationtab"
        };
    });

    myapp.directive("contracttab", function () {
        return {
            restrict: "E",
            templateUrl: "./contractTab.html",
            controller: function () {
                this.tab = 1;

                this.isSet = function (checkTab) {
                    return this.tab == checkTab;
                };

                this.setTab = function (activeTab) {
                    this.tab = activeTab;
                };
            },
            controllerAs: "contracttab"
        };
    });


    myapp.directive("bookingtab", function () {
        return {
            restrict: "E",
            templateUrl: "./bookingTab.html",
            controller: function () {
                this.tab = 1;

                this.isSet = function (checkTab) {
                    return this.tab == checkTab;
                };

                this.setTab = function (activeTab) {
                    this.tab = activeTab;
                };
            },
            controllerAs: "bookingtab"
        };
    });





})();