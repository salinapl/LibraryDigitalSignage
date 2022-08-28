<!doctype html>
<?php $url = $_SERVER['REQUEST_URI']; ?>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?= $page->htmltitle() ?></title>
        <?= css('assets/css/bootstrap-reboot.min.css') ?>
        <link rel="stylesheet" id="ebor-google-font-css" href="fonts.googleapis.com/css?family=Open+Sans%3A200%2C300%2C400%2C400i%2C500%2C600%2C700%7CLora%3A400%2C400i%2C700%2C700i%7CMaterial+Icons&amp;ver=10.5.15" type="text/css" media="all">
        <?= css('assets/css/templates/event.css') ?>
    </head>
    <body>
        <h1>Upcoming Events at the Salina Public Library</h1>
        <ul id="evlist"></ul>

        <script>
            const ul = document.getElementById('evlist');
            const list = document.createDocumentFragment();
        <?php foreach($page->calendar()->toStructure() as $links): ?>
            const url = '<?= $links->link() ?>'; 
        <?php endforeach ?>        
            fetch(url) 
                .then((response) => { 
                    return response.json(); 
                }) 
                .then((json) => { 
                    json.map(function(evnt) { 
                        let branchName = Object.values(evnt.branch)?.[0];
                        let roomName = Object.values(evnt.room)?.[0];
                        let li = document.createElement('li'); 
                        let title = document.createElement('h2');
                        let start_time = document.createElement('span');
                        let start_date = document.createElement('span');
                        let raw_date = `${evnt.start_date}`;
                        let date = new Date(raw_date);
                        let options_date = {  
                            weekday: "long", month: "long",  
                            day: "numeric"
                        };
                        let options_time = {  
                            hour: "numeric", minute: "2-digit"
                        };

            title.innerHTML = `${evnt.title}` + " | " + `${branchName}` + " - " + `${roomName}`;

            start_date.innerHTML = date.toLocaleDateString("en-us", options_date);
            start_time.innerHTML = date.toLocaleTimeString("en-us", options_time);

            li.appendChild(title);
            li.appendChild(start_time).classList.add("time");;
            li.appendChild(start_date);
            list.appendChild(li);
            ul.appendChild(list);
        });
        })
        .catch(function(error) {
        console.log(error);
        });
        </script>
    </body>
</html>
