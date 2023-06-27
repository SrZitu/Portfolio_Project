<section class="bg-light py-5">
    <div class="container px-5">
        <div class="row gx-5 justify-content-center" id="about-id">


        </div>
    </div>
</section>

<script>
    aboutData();
    socialData();
    async function aboutData() {
        try {
            let url = "/aboutData";
            document.getElementById('loading-div').classList.remove('d-none');
            document.getElementById('content-div').classList.add('d-none');

            let response = await axios.get(url);

            document.getElementById('loading-div').classList.add('d-none');
            document.getElementById('content-div').classList.remove('d-none');

            response.data.forEach((item) => {
                document.getElementById('about-id').innerHTML += `
                <div class="col-xxl-8">
                    <div class="text-center my-5">
                        <h2 class="display-5 fw-bolder"><span class="text-gradient d-inline">About Me</span></h2>
                        <p class="lead fw-light mb-4">${item['title']}</p>
                        <p class="text-muted">${item['details']}</p>
                    </div>
                </div>`;
            });
        } catch (error) {
            alert(error);
        }
    }

    async function socialData() {
        try {
            let url = "/socialData";

            document.getElementById('loading-div').classList.remove('d-none');
            document.getElementById('content-div').classList.add('d-none');

            let response = await axios.get(url);

            document.getElementById('loading-div').classList.add('d-none');
            document.getElementById('content-div').classList.remove('d-none');

            response.data.forEach((item) => {
                document.getElementById('about-id').innerHTML += `

                <div class="d-flex justify-content-center fs-2 gap-4" id="social-id">
                <a class="text-gradient" href="${item['twitterLink']}"><i class="bi bi-twitter"></i></a>
                <a class="text-gradient" href="${item['linkedinLink']}"><i class="bi bi-linkedin"></i></a>
                <a class="text-gradient" href="${item['githubLink']}"><i class="bi bi-github"></i></a>
              </div>
               `;
            });
        } catch (error) {
            alert(error);
        }
    }
</script>
