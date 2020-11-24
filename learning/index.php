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
                let [tmp, liArray] = populatePagiation(data, (item) => item["year"], displayDeckYear);
                let deck_index = document.getElementById("deck_index");
                deck_index.innerHTML = "";
                deck_index.appendChild(tmp);
                displayDeckYear(data, liArray, data.length-1);
            }
        });
        $.ajax({
            url: "events.json",
            success: function (data) {
                let now = new Date();
                let upcoming = {"year": "Upcoming", "events": []};
                let yearMap = {"Upcoming": upcoming};
                let eventArray = [upcoming];

                for (let i=0; i < data.length; i++) {
                    let event = data[i];
                    let date = new Date(event["date"]);
                    let events;
                    if (date < now) {
                        let year = date.getFullYear();
                        if (!yearMap.hasOwnProperty(year)) {
                            let events = {"year": year, "events": []};
                            sortedSplice(eventArray, (a) => a["year"].toString(), events);
                            yearMap[year] = events;
                        }
                        events = yearMap[year];
                    } else {
                        events = yearMap["Upcoming"];
                    }
                    sortedSplice(events["events"], (a) => a["date"], event);
                }
                let [tmp, liArray] = populatePagiation(eventArray, (item) => item["year"], displayEventYear);
                let deck_index = document.getElementById("event_index");
                deck_index.appendChild(tmp);
                displayEventYear(eventArray, liArray, eventArray.length - 1);
            }
        });
    });

    function displayDeckYear(data, liArray, index) {
        replaceActive(liArray, index);
        let events = data[index]["events"];
        let tmp = document.createDocumentFragment();
        traverseDeck(tmp, events);
        let decks = document.getElementById("decks");
        decks.innerHTML = "";
        decks.appendChild(tmp);
    }

    function displayEventYear(data, liArray, index) {
        replaceActive(liArray, index);
        let events = data[index].events;
        let tmp = document.createDocumentFragment();
        for (let i=0; i < events.length; i++) {
            let event = events[i];
            let div = document.createElement("div");
            if ("img" in event) {
                let img = document.createElement("img");
                img.src = event["img"];
                img.style = "width: 100%";
                div.appendChild(img);
            }
            let title = document.createElement("h3");
            title.innerHTML = event["title"];
            div.appendChild(title);
            let desc = document.createElement("p");
            desc.innerHTML = event["desc"];
            div.appendChild(desc);
            let hr = document.createElement("hr");
            div.appendChild(hr);
            tmp.appendChild(div);
        }

        let eventElement = document.getElementById("events");
        eventElement.innerHTML = "";
        eventElement.appendChild(tmp);
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
                    let li = pagiationElement(key, value);
                    ul.appendChild(li);
                }
                li.appendChild(ul);
                root.appendChild(li);
            } else {
                let li = pagiationElement(event["name"], event["url"]);
                root.appendChild(li);
            }
        }
    }

    function populatePagiation(arr, titleLambda, onClickHandler) {
        let tmp = document.createDocumentFragment();
        let liArray = [];
        for (let i=0; i < arr.length; i++) {
            let item = arr[i];
            let title = titleLambda(item);
            let li = pagiationElement(title);
            liArray.push(li);
            li.onclick = function() {onClickHandler(arr, liArray, i)};
            tmp.appendChild(li);
        }
        return [tmp, liArray];
    }

    function pagiationElement(name, hash="#") {
        let li = document.createElement("li");
        let a = document.createElement("a");
        a.classList.add("page-link");
        a.innerText = name;
        a.href = hash;
        li.appendChild(a);
        return li;
    }

    function replaceActive(elementArray, index) {
        for (let i=0; i < elementArray.length; i++) {
            elementArray[i].classList.remove("active");
        }
        elementArray[index].classList.add("active");
    }

    function sortedSplice(arr, key, item) {
        let cmp = key(item);
        let i = 0;
        if (arr.length) {
            for (; i < arr.length; i++) {
                let comp = key(arr[i]);
                if (comp > cmp) {
                    break;
                }
            }
        }
        arr.splice(i, 0, item);
        return i;
    }
</script>

<div class="well card-1">
    <div class="row">
        <div class="col-sm-5 col-sm-offset-2 text-dark">
            <h1>IEEE Learning Committee</h1>
            <hr />
            <p>
                Please contact the current chair, Angelo Guarnero, at
                <a href="mailto:learn@purdueieee.org">learn@purdueieee.org</a> or visit the IEEE office in EE 014 if you
                have any questions or concerns.
            </p>
			<p>
                This year, learning events are usually being posted on our
				<a href="https://www.youtube.com/channel/UCJwFwlur0e2fgwf97eV7INw/videos">YouTube channel!</a>.
				Check it out for Solidworks, Eagle, Git, and more!
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