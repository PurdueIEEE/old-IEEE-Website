<?php
    $page_title = '2019 Officers';
    $site_title = 'Purdue IEEE';
    $site_index = '/';
    include 'header.php';
?>
<script type="text/javascript">
    $(document).ready( function() {
        $("#header").load("header.php");
        
        // This finds the last file in the officers directory and assumes it to be the json file for the current year in YYYY.json filename. 
        let maxYear = parseInt(<?php echo json_encode(substr(end(scandir("./officers/")), 0, 4), JSON_HEX_TAG); ?>);
        populateYears(2008, maxYear);
        let year = window.location.hash.replace("#", "") || maxYear;
        displayYear(year);
    });

    function populateYears(from, to) {
        let tmp = document.createDocumentFragment();
        for (let year = from; year <= to; year++) {
            let li = document.createElement('li');
            li.id = `year${year}`;
            let a = document.createElement('a');
            a.href = `#${year}`;
            a.innerHTML = `${year}`;
            a.onclick = function () {displayYear(year)};
            li.appendChild(a);
            tmp.appendChild(li);
        }
        $("#years")[0].appendChild(tmp);
    }

    function displayYear(year) {
        $.ajax({
            url: `officers/${year}.json`,
            success: function (data) {
                let tmp = document.createDocumentFragment();
                for (let i = 0; i < data.length; ++i) {
                    let officer = data[i];
                    tmp.appendChild(document.createElement("hr"));
                    let row = document.createElement("div");
                    row.classList.add("row");
                    let img_cont = document.createElement("div");
                    img_cont.classList.add("col-md-3");
                    let img = document.createElement("div");
                    img.classList.add("officer-cropped");
                    img.style.backgroundImage = `url(${officer["image"]})`;
                    img_cont.appendChild(img);
                    row.appendChild(img_cont);
                    let text = document.createElement("div");
                    text.classList.add("col-md-9");
                    text.innerHTML = `<h3>${officer["name"]}</h3><h4>${officer["position"]}</h4><p>${officer["description"]}</p><p><em>Committee Involvement</em>: ${officer["committees"]}</p>`;
                    row.appendChild(text);
                    tmp.appendChild(row);
                }
                let officers = document.getElementById("officers");
                officers.innerHTML = "";
                officers.appendChild(tmp);
                document.title = `${year}` + document.title.substring(4);
            }
        });

        // Change active year
        let children = $("#years").children();
        children.removeClass("active");
        $(`#year${year}`).addClass("active");
    }
</script>

<div class="well card-1 text-dark">
    <div class="row text-center">
        <div class="col-lg-12">
            <ul class="pagination" id="years"></ul>
        </div>
    </div>
    <div id="officers"></div>
</div>

<?php
    include 'footer.php';
?>
