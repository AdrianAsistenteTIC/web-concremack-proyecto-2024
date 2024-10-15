<style>
  .portfolio-grid {
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
    gap: 20px;
    padding: 20px;
  }

  .portfolio-item {
    position: relative;
    width: 300px;
    height: 300px;
    overflow: hidden;
  }

  .portfolio-item img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    border-radius: 10px;
  }

  .overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.7);
    opacity: 0;
    transition: opacity 0.3s ease-in-out;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 10px;
  }

  .portfolio-item:hover .overlay {
    opacity: 1;
  }

  .text {
    color: white;
    text-align: center;
    padding: 20px;
  }

  .text h3 {
    margin-bottom: 10px;
  }

  .text p {
    font-size: 14px;
  }
</style>
<section class="container py-lg-8 py-5" data-cue="fadeIn">
  <section class="my-xl-9 my-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="text-center mb-xl-7 mb-5">
            <p class="display-1 mb-0">
              TITULO
            </p>
          </div>
        </div>
      </div>
      <div class="table-responsive-lg">
        <div class="row flex-nowrap pb-4 pb-lg-0 me-5 me-lg-0">
          <div class="col-lg-12 col-md-12 col-12">
            <div>
              <div class="portfolio-grid">
                <div class="portfolio-item">
                  <image src="assets/images/portfolio/CARD1.png" alt="CONCREMACK" title="CONCREMACK" />
                  <div class="overlay">
                    <div class="text">
                      <div class="card border-danger mb-3">
                        <div class="card-header text-white text-bg-danger">
                          <i class="bx bx-chevrons-right fs-lg me-2"></i> TITULO
                        </div>
                        <div class="card-body text-danger">
                          <p class="card-text text-dark" style="text-align: justify;">
                            COMENTARIO.
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="portfolio-item">
                  <image src="assets/images/portfolio/CARD1.png" alt="CONCREMACK" title="CONCREMACK" />
                  <div class="overlay">
                    <div class="text">
                      <div class="card border-danger mb-3">
                        <div class="card-header text-white text-bg-danger">
                          <i class="bx bx-chevrons-right fs-lg me-2"></i> TITULO
                        </div>
                        <div class="card-body text-danger">
                          <p class="card-text text-dark" style="text-align: justify;">
                            COMENTARIO.
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="portfolio-item">
                  <image src="assets/images/portfolio/CARD1.png" alt="CONCREMACK" title="CONCREMACK" />
                  <div class="overlay">
                    <div class="text">
                      <div class="card border-danger mb-3">
                        <div class="card-header text-white text-bg-danger">
                          <i class="bx bx-chevrons-right fs-lg me-2"></i> TITULO
                        </div>
                        <div class="card-body text-danger">
                          <p class="card-text text-dark" style="text-align: justify;">
                            COMENTARIO.
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="table-responsive-lg">
        <div class="row flex-nowrap pb-4 pb-lg-0 me-5 me-lg-0">
          <div class="col-lg-12 col-md-12 col-12">
            <div>
              <div class="portfolio-grid">
                <div class="portfolio-item">
                  <image src="assets/images/portfolio/CARD1.png" alt="CONCREMACK" title="CONCREMACK" />
                  <div class="overlay">
                    <div class="text">
                      <div class="card border-danger mb-3">
                        <div class="card-header text-white text-bg-danger">
                          <i class="bx bx-chevrons-right fs-lg me-2"></i> TITULO
                        </div>
                        <div class="card-body text-danger">
                          <p class="card-text text-dark" style="text-align: justify;">
                            COMENTARIO.
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="portfolio-item">
                  <image src="assets/images/portfolio/CARD1.png" alt="CONCREMACK" title="CONCREMACK" />
                  <div class="overlay">
                    <div class="text">
                      <div class="card border-danger mb-3">
                        <div class="card-header text-white text-bg-danger">
                          <i class="bx bx-chevrons-right fs-lg me-2"></i> TITULO
                        </div>
                        <div class="card-body text-danger">
                          <p class="card-text text-dark" style="text-align: justify;">
                            COMENTARIO.
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="portfolio-item">
                  <image src="assets/images/portfolio/CARD1.png" alt="CONCREMACK" title="CONCREMACK" />
                  <div class="overlay">
                    <div class="text">
                      <div class="card border-danger mb-3">
                        <div class="card-header text-white text-bg-danger">
                          <i class="bx bx-chevrons-right fs-lg me-2"></i> TITULO
                        </div>
                        <div class="card-body text-danger">
                          <p class="card-text text-dark" style="text-align: justify;">
                            COMENTARIO.
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</section>
