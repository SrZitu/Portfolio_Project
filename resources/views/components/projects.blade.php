<section class="py-5">
    <div class="container px-5 mb-5">
        <div class="text-center mb-5">
            <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Projects</span></h1>
        </div>
        <div class="row gx-5 justify-content-center">
            <div id="project-list" class="col-lg-11 col-xl-9 col-xxl-8">



            </div>
        </div>
    </div>
</section>


<script>
    projectData();
    async function projectData() {
        let url = "/projectData";
        try {
            let response = await axios.get(url);
            response.data.forEach((item) => {
                document.getElementById('project-list').innerHTML += `
                    <div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
                        <div class="card-body p-0">
                            <div class="d-flex align-items-center">
                                <div class="p-5">
                                    <h2 class="fw-bolder"> ${item['title']}</h2>
                                    <p>${item['details']}</p>
                                </div>
                                <img class="img-fluid" src="${item['thumbnailLink']}" alt="..." />
                            </div>
                        </div>
                    </div>
                `
            });
        } catch (e) {
            console.log(e);
        }
    }
</script>
