<?php
$page_title = 'Learning Committee';
$site_title = 'Purdue IEEE';
$site_index = '/';
include '../header.php';
?>
<script type="text/javascript">
    $(document).ready(function () {
        $.ajax({
            url: 'decks.json',
            success: function (data) {
                let tmp = document.createDocumentFragment();
                let li;

                for (let i=0; i < data.length; i++) {
                    let deck = data[i];
                    let year = deck["year"];
                    li = new_li_a(year, "#");
                    li.onclick = function() {displayDeckYear(data, year)};
                    tmp.appendChild(li);
                }
                li.classList.add("active");
                tmp.appendChild(li);

                let deck_index = document.getElementById("deck_index");
                deck_index.innerHTML = "";
                deck_index.appendChild(tmp);

                displayDeckYear(data, data.length-1);
            }
        });
        $.ajax({
            url: "events.json",
            success: function (data) {
                let currentYear = new Date().getFullYear();

                console.log(data);

                for (let index in data) {
                    let event = data[index];

                    console.log(event);
                }
                // li = new_li("Upcoming", "#upcoming");
            }
        });
    });

    // function onHashChange (data) {
    //     console.log(data);
    //     let hash = window.location.hash.replace("#", "");
    //     let year = hash.slice(-4);
    //     if (hash.startsWith("deck")) {
    //         displayDeckYear(data, year);
    //     } else {
    //         displayYear(data, year);
    //     }
    // }

    function displayDeckYear(data, index) {
        // console.log(`Display Deck ${index}`);
        let deck = data[index];
        let events = deck["events"];

        let tmp = document.createDocumentFragment();
        traverseDeck(tmp, events);

        let decks = document.getElementById("decks");
        decks.innerHTML = "";
        decks.appendChild(tmp);
    }

    function traverseDeck(root, events) {
        for (let i=0; i < events.length; i++) {
            let event = events[i];
            // console.log(event);
            if ("sessions" in event) {
                let sess = event["sessions"];
                let li = document.createElement("li");
                li.innerText = event["name"];
                let ul = document.createElement("ul");
                for (let [key, value] of Object.entries(sess)) {
                    let li = new_li_a(key, value);
                    ul.appendChild(li);
                }
                li.appendChild(ul);
                root.appendChild(li);
            } else {
                let li = new_li_a(event["name"], event["url"]);
                root.appendChild(li);
            }
        }
    }

    function displayYear(data, year) {

    }

    function new_li_a(name, hash) {
        let li, a;
        li = document.createElement("li");
        a = document.createElement("a");
        a.innerText = name;
        a.href = hash;
        li.appendChild(a);
        return li;
    }
</script>

<div class="well card-1">
    <div class="row">
        <div class="col-sm-5 col-sm-offset-2 text-dark">
            <h1>IEEE Learning Committee</h1>
            <hr />
            <p>
                Please contact the current chair, Jason King, at
                <a href="mailto:king316@purdue.edu">king316@purdue.edu</a> or visit the IEEE office in EE 014 if you
                have any questions or concerns.
            </p>
        </div>
        <div class="col-sm-4 text-dark">
            <h1>Slide Decks</h1>
            <ul class="pagination" id="deck_index"></ul>
            <ul id="decks"></ul>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2 text-dark">
            <h2>Events</h2>
            <hr />
            <ul class="pagination" id="event_index"></ul>
            <ul id="events"></ul>
        </div>
    </div>
</div>

<?php include '../footer.php'; ?>