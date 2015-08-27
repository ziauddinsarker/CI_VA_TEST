<!DOCTYPE html>
<html>
    <head>
        <title>Search</title>
        <link href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>" rel="stylesheet" type="text/css" />
        <style>

        </style>
    </head>
<body>

<div class="container">
    <article class="row">
        <h5>Enter Name</h5>
        <div class="row">
            <div class="col-lg-8">
                <div id="remote">
                    <input type="text" class="form-control typeahead" name="office">
                </div>
            </div>
        </div>
    </article>
</div>

    <script src="<?php echo base_url('assets/js/jquery-1.11.3.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/typeahead.jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/bloodhound.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/hogan-3.0.2.min.js'); ?>"></script>

    <script>

        var countries = new Bloodhound({
            datumTokenizer: Bloodhound.tokenizers.whitespace,
            queryTokenizer: Bloodhound.tokenizers.whitespace,
            // url points to a json file that contains an array of country names, see
            // https://github.com/twitter/typeahead.js/blob/gh-pages/data/countries.json
            prefetch: '<?php echo base_url().'c_search/c_get_all'; ?>'
        });

        // passing in `null` for the `options` arguments will result in the default
        // options being used
        $('#remote .typeahead').typeahead(null, {
            name: 'countries',
            source: countries
        });
    </script>
</body>
</html>


