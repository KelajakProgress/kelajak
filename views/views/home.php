<?php
    session_start();

    if (isset($_SESSION['username'])){
        $user = getUsers($_SESSION['username'], 'users');
    }
?>



    <!-- Start banner -->

    <div class="row">
        <div class="col-lg-7">
            <div class="banner text-center">
                <img src="img/Banner0.png" class="img-fluid">

                <div class="student">
                    <img src="img/users/01.jpg" class="rounded-circle r-img" title="Alecsandr" />
                    <img src="img/users/1.jpg" class="rounded-circle r-img" title="Keys" />
                    <img src="img/users/4.jpg" class="rounded-circle r-img" title="Kristina" />
                    <img src="img/users/8.jpg" class="rounded-circle r-img" title="Jeyna" />

                    <?php if (isset($_SESSION['username'])): ?>

                    <a href="?view=sign">
                        <img class="rounded-circle r-img" title="Join us..." src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAV5JREFUSEuVVkEShCAMK69ZL+7/36EXf+NOAaFtArIedhyobUnSsEn0SSJy57f25KX+U9eTJLljqP8wZNEU7WNbxebu9esbaQjymFBfAD4ed82bCEisBHEMXuDCEwADJK+HCCgiKQoHNdISSPiV6zhuDd723XCHKrEoJ96FPX4Pv84zC+tTC7hEKMTWO5Ug4TqfQEt/vrseNoq6yT0WnujYb12nh2hFvkMOGOUNIjiBn1XkYOUMSeQ6LAceiCyQgSPAoGmiaU3dDTrS+KKuUJjhOC5wS9FXeWLDW4bOr5o+cCOaXSQZeFqCqPbWh248B9PZd1bBRG+E/myrijrWA5wCcEamzTHgbngAf7hxVkFgsdaNWpg4mLeKEWe+0eJFL3PwH0ThPliZMatJMLhRh47kFb1R5YdhIPbq7PqlmZzNynf6B6ByaQoQ0gh+pMlQGI2vpeHj4O9eKzIQHFn4AXVHzR5dlFvvAAAAAElFTkSuQmCC" />
                    </a>

                    <?php else: ?>

                    <a href="?view=login">
                        <img class="rounded-circle r-img" title="Join us..." src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAV5JREFUSEuVVkEShCAMK69ZL+7/36EXf+NOAaFtArIedhyobUnSsEn0SSJy57f25KX+U9eTJLljqP8wZNEU7WNbxebu9esbaQjymFBfAD4ed82bCEisBHEMXuDCEwADJK+HCCgiKQoHNdISSPiV6zhuDd723XCHKrEoJ96FPX4Pv84zC+tTC7hEKMTWO5Ug4TqfQEt/vrseNoq6yT0WnujYb12nh2hFvkMOGOUNIjiBn1XkYOUMSeQ6LAceiCyQgSPAoGmiaU3dDTrS+KKuUJjhOC5wS9FXeWLDW4bOr5o+cCOaXSQZeFqCqPbWh248B9PZd1bBRG+E/myrijrWA5wCcEamzTHgbngAf7hxVkFgsdaNWpg4mLeKEWe+0eJFL3PwH0ThPliZMatJMLhRh47kFb1R5YdhIPbq7PqlmZzNynf6B6ByaQoQ0gh+pMlQGI2vpeHj4O9eKzIQHFn4AXVHzR5dlFvvAAAAAElFTkSuQmCC" />
                    </a>

                    <?php endif; ?>
                    <p>
                        More than 80k+ <br> Students
                        <span class="text-danger">joined!</span>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-lg-5 mt-5">
            <h1 class="text-uppercase line-height">
                grow your skills to advance your career path
            </h1>
            <p class="mt-3 text-secondary">
                We have something big for you who want to level up!
            </p>

            <form class="d-flex btn-group my-5">
                <div class="input-group">
                    <input class="form-control zero" type="search" placeholder="Search..." aria-label="Search" />
                    <button class="btn btn-outline-secondary" type="submit">
                        <img class="img-fluid" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAAkCAYAAADhAJiYAAAAAXNSR0IArs4c6QAABDVJREFUWEetWN1x20gMBiJSr+cSrMwsGOXFTgUnV2Cngpw6cCq4pILkKjBTQZwKIlcQ+SUOlw9WOrCfHQk3IEFxlz9LKhPNeMbi7gLffgA+gEJofhAA2H/Y8WjMsdYe90GfTXQXxjgOGi0MjLGCgMDNexemPUC1MzU6xnYLoTo79KzaCQNynN3d3R1PJpNzRFww8zEAnOryGhE3zLzabrdf5vOXm1bMg8FrpwdAgBAF8i8A/DPSbrrdbt/PX843nTEZMCJQKrLKuGoeyP8/suwCEa8Q4KiR563oNiL3sGNeJklyXUeu79Z+PjmAfOjWWmHkysErkbgBgBQQ1mRoLWvWWgmd/Mn+vxsELIkoLZ+NKR8B11H22Y+Cmc+VIQS+BcRLY8wqxHie55JfHwHgpDrLvHudvEiux4bPAyRfvpfJ+80J020cx4vZbPbQCaZRTff390dPT08CXEHBQxzHs87zPZrnsWmtFYrfKMu3cRQA00NXDQpPtOI+EdGoovAYEnaiyeS+ijgAnhnyw9RK0h5QGr6vVfpsf21n8/l8M1SpJSCtrDy3l8z8QR/cUEKLsbHvcmStldAViY6Ib40xkl+NT1eV6bWzLLtGxHM9sa+QVqhHqrBbqcz8JUmSC6/YOm7hhSy3ds0IJypGr4jK0v4tQAhgs/wUgL+p3zURveoC5AmC+8Vau9c/IlKwI+loCFb1tdumrvZWma7XhxGITKlSge49BqoD6JGIjrpyqO596Hd7a62EqNIPDVm/2yFAquJVyG6IaDGk2l4OFUn9DM+lshBgafay3yqM7obeaFeS1AhwpST/R0SXlaWafP9aTtkD5HmuZV8cWxHR2ZBuhNatzVcArGUPb40hLfsw63ubOmoUwqjacbbvXweWmieMAI9xHB3PZs+1/YwEJCCq1qFH1nEcn3X3sX6j2jpEpYshjnf8PnmRvBvDtpNDpQNlSZL7L+VpHcdRD6i2ixYY5p/T6fTUv9QBDImLrBzMdPwonMqYKtLvjR/NvqZh+oAAp5WgIeK1Mea1D70PUNc8VGuSP6CVz1fMnCLibaXiUtrMfIKIsl/LusVcSkTLvpB5St3a5KwqUzKOaPjGZAEAM/9UVqu+KA0oJTJ7UH014ulQlzvJqWgyecfVjBTG9CgT43Q6/Th7PnuwmTNblT0xNQVTPT1D9K9JV7tTaLJ/vzuO4snFbscLRJTXIFH0R2FC2dhEUZQ2k9faTGbwN9KC9CUiJRMO32Acgi2tPz/3au5NoaW3NCFaepd3VH4PqMVWJZDt1/3GJYa6Wq1vzsGORG9UWYuJYT+D7NYbEHKbpU4u6gAY6GUHWA8wFI6hhk/6pL6vtRWqM+ndbU0B/H3gwye9sg8mb4etw/b3/wTTvPww7NAOpzq89/9g/o3qZYEfkXqq7A/nfCETZcjGWB5Q0GETwzsEyv/9EfA4V4gNQAAAAABJRU5ErkJggg==" />
                    </button>
                </div>
            </form>

            <p class="text-secondary">Suggestions</p>
            <a href="#" class="btn btn-outline-secondary m-2">UI UX Design</a>
            <a href="#" class="btn btn-outline-secondary m-2">CSS Fundamental</a>
            <a href="#" class="btn btn-outline-secondary m-2">3D Design Illustration</a>
            <a href="#" class="btn btn-outline-secondary m-2">Website Development</a>
            <a href="#" class="btn btn-outline-secondary m-2">Logo Design</a>
            <a href="#" class="btn btn-outline-secondary m-2">Icon Design</a>
        </div>
    </div>

    <!-- End banner -->

    <!-- Start About -->

    <div class="row mt-6">
        <div class="col-lg-4">
            <div class="row">
                <div class="col-md-2 text-center">
                    <img class="mt-1 cp" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAAkCAYAAADhAJiYAAAAAXNSR0IArs4c6QAABGlJREFUWEetWNFx2zoQXEjJt6AKEo0p/8apwHYFCdjAiyt4TgWRK4hcQeQGBLuCKBVE79dixkoFhv+fhQwIgDiQBEnPhD+WSfCw2NvbuyEDuRgA7f4vf9MbdOHg342IQMutOoY4/BAQbk1YGr/00vvdgHpO38lcz2Ea79Ib7rf5E9PYANSgo3V9A0sL8tQaBh1JJc1JKmgPEw9c8pkSqgr8Qhn0AErJPiU9hl98fasBPQYuImCJAqJZsinrz1uZpt1EnjHgXwAf3Ut7xrAaaX09U7kya4qJNM+kU8L2SIn3bSdOFVsEiOaSAjX3d1yuAPwTsBuDqF5XB+D8+Elsf03kpQa+kmNeHylxWQeVyiIBlMocQ8HXS1hmui41Bt7PVL4v+PoTgG++XkbAbKbEvud9e9Z25YdX77k8GQE/SbCbA8Pytcb+2abOgJ245zeZEgYMCi43gD4tWWS4yR7t/b4roaEAs+CSsKPvMpU7/dg1u6k8Yxrf/UZjYGqEXHCjJS0NGgYkteRZrDpEey6D9xQTuWHAqWsjIlPitl4GBZcmHW/MfQ19Plf5xrHk90GmxAB5eFV25M1Sj1MLQotM5Q6QObk1tDSgtfZbVIB6NBKhbmMrThk2mRLnFlx3yu6n8mSkg/YylbPQulvMPmodZAO/mT+9EfUY+Gm5L0v99gBcvYYRtf4AsCWguWOiEvWOywUDvrj03mVKeO/q1HUirzFXlKWUoQF4GjOczB7z/QNfv322lcnd7kF7LWmox2zlr26SBTXG5hmfDsDZsRJb08cOwHcNnAz1oQCorMi2q4WH0DouwfDBteffGli9Apam1OtgSGTFgGWmxFVVdol9LaDObhw/7GvczkiNCRrNlFZArlWmxEW8ZS0+pYtWAY3ywOXb/5l+N9KsTIO/SonbAOoAvZ2r/Ad9bszxACxGwDuzyBoFKlCp3Lj7zlcI4B0vu7uplLPO0ggkl6kZAdd07PD6c5UNpvH5SAnTARoJSvoQFbEPVI11LYFqvNnur/JtMM/1CmB2WgBMIzYNNwxxPmZbGScq6k4D22joCMA4Az7qWDMOlNh6sNTRjZcdK7GoM9/o9rupXDCNLwTo3Ri4HDI+FFwaMdPuHzHhnpdjCYB9psQsFnht/DBl+ww8EEMrnbezAdeO6Jx9o91IooGrOWGi4NKkqRxXXNrsnBT6efin4NJ4zFejFQ38N1ciVBUVUk+DrDGhMiWmVdqmcgPtmzUuMiXMJFpdUcrizo6L7Ems6kImr1bdvq0CowmA4Xz+KMqRhPY4z17SqQOdGmOwctBKl3tHV7MjSTXYMYbPR49i2UNslblqz4LLytnnSrDI5l/o5vek21sm8kXDeBONthJUAKRh55fuKyV24z1NQLTE06eLNDSE0j6QDV+pvqj0dMGoyhq7dJyAfLJpB9fXfmlJNYP1pqVuXNQz+tkix07OHWE293v1x33hiriMw5eNIWEGMfRXU5OoLP+1bhCghuN0Bo0fpgolpbQ/DU4gSOmKn9gAAAAASUVORK5CYII=" />
                </div>
                <div class="col-md-10">
                    <h2 class="text-capitalize cp">get new friends</h2>
                    <p class="text-secondary mt-3">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Et at
                        cumque ut error distinctio minus iusto consequuntur dolore
                        obcaecati sapiente rerum magni delectus, voluptatem dicta! Enim
                        autem optio aliquid modi.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="row">
                <div class="col-md-2 text-center">
                    <img class="mt-1 cp" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAAkCAYAAADhAJiYAAAAAXNSR0IArs4c6QAAAyRJREFUWEelWNF12zAMBNIBqg2qJHa/u0G9ieUNuoGdDbpB5U3cNRLHciaoOkDNPlKUBRCASCf+shWQON4dACoI1w8CgJt+pt/on8P3TLyyk76M7+N/qR+RzsovgMbtSuIN0O8GNOWUp5zh2lYBAEyGZlcV00oDFcoUDQWg6rlewSf4Hra6wO9++XaY9da7kNuySkAvDztAtw1LHD71y25XDOh2n4vjFAA67bKijxUXAVk+LyGTABq2qQJDl22wV2BIASS0L2kZCAguNhb6ncNkDPkfnxVAt+YvYSLEGIwyhw0MuW2IveBT/zXjIaVhTUyUQONsfdxDqi2TLhQpppKJQiFsMeoGyWKVBYYypi4h4YYYTBmvnh92cEfL3gJU0p2pSXh8daybfnFuxcik7d9TyhgSVSb1HsSxwWktoDretwiwdoBtvzht0n7OQEqGLFMrJVIgjQcDAOsp1G0mpvyBk89YZVOntvoQ52VKRE+dypSAQdj3j12TssgZmjW13gDlqbHtl6cNvTPxGAcIuP+z6BrhoVsZEkUgJBh3nJgawZC1+14BM7pRYYiPDp0XhOpYJ36ANwD4Mm2IbbxaTp4JMp0b2jxNyabRkS97KROEU18rSK/4yIw9+8pNTfaoXu9bcLC2JFDAetIMmXi1SkCiMcayj+tCMoQ1eR8IiWg/C7eGCDq2qSATHRdxmoRHUjJ6egooGR2DZ5D0ENj3y665gkuUqF7rHx5Q/3j+OdeieHMmkdRDIYh2agSoXuoGAH/FJfu/i64xL/O2TYjn5ZsXmWXDDtoFje7tZxAgrnxDyw96BVXmEfOQXmXcQ7PHKxgdWohR9pShfNlnc/PiSQawfZ0tL/tZBFwHWkHKZSC7UwxQGAI4ALpDlo0xwDs8MYF1sQ/Zwnvf+ZC2ANYI2J361kpJzeAEwgg9Po9VbHhoiA1VNJV2ITlheiv/O7EBhXjlNUt6qKsr+AcrcHffQgYREXvH+NyKyfcE/65+8JLRUC3d7FaWikKtNEsyIqwk7JIvkuUfXPctAVqiv8FQxs0W0JIiYDUtIRZJlj+Z/a6eX8sj/gP88Oo2N4z45wAAAABJRU5ErkJggg==" />
                </div>
                <div class="col-md-10">
                    <h2 class="text-capitalize cp">get new friends</h2>
                    <p class="text-secondary mt-3">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Et at
                        cumque ut error distinctio minus iusto consequuntur dolore
                        obcaecati sapiente rerum magni delectus, voluptatem dicta! Enim
                        autem optio aliquid modi.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="row">
                <div class="col-md-2 text-center">
                    <img class="mt-1 cp" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAAkCAYAAADhAJiYAAAAAXNSR0IArs4c6QAAA2BJREFUWEetWMt11EAQ7B7J5gghrN/j4b0BEWAiACKwicAmAq8jACIAZ2AiIASW2645ICLAV69Wat58tOrR9Hxg0cG2pJmemuqq7pER9IUAQOav/3DtF0zPFi4etGSBkjGZZdxrDEL9Y+w8tS5wJr5lSBi0aecnqqZz6OH1+FrnVSbVjIm/9vEi3PTYXx3ij+V0I2L07XZ+Bkifwl2XrFg85q7C+yNUv+4QaCdhjyF909N81vX0M58CPoKDIEDQS0wvASjh27pefeYjPYb0zbY7viCA9y6T35W6P0Fs7nLSD95HtNJ28wUCXerxBHh1UK0WXDYBoI0wYYxd4r60av8KkEYanZB0LXeQTRjFGNrOF4gCQ4Ptpy4bABk9cUozouIsJgGZDPSX2q1eynKATI4Jrw5ql2MGiGj2qO8PzwFgRgRf6vr2Rr+27uxfIECj1OajpL0wA+sFbxOB7e2E+A7IuvCrBjNiJOcUPGO4m0rhS4WrhjsuJwlbqccfWQ113fGSCJ5G6qOXWARYVtX6uS28VluSaaK2z4l6Q4+fqb76ZopMpAvugrsxlcIjVKtmKExlDDFBpXagtdP1D36na5JD4n7V1dqDngU0DZ6uEwhtd7wrbLk+jADvqmr9ga8xaFQnUHJxRNTxSmrc1D3RIj6VW8SwPF3X1S0XuXmRM00BIN+Ww3IWFJ7K6aPryoAJOcymjBmM7YAzJAMambKg2BGFMeMD0ndpl2nO/WgZSsMd+0yFaZrOkBiadkjmMcrUIVnGGhSBakxVJyFRbJoHSOgE7AhrZ0V72TS30xJY+JXQCs01wpDdWa6STlMcijpeDEx8B8g0b4mhMaDPkGmuQrfnXd00xWQx8veebx0IwVcHp3QAO6W06HjKlemqNnOi8WX8+MF456KTakzwLNbXhOdTMssAMdFFm6hZrKTDprdUBoidqRFgPOTnGpe4dtmkqMtyx4+iFEYHxZWYBNS5zyDX5JZK4RvEVRO6yR3mMyhljsKWMhjFrTtGtUfUfgmADyWXmWf7y8eGSdeh0afb1n1KJxfeD5UpjJE6J5LetvMTrOgCCF7lteN/SptqWYDXusydJlxrClJmFy9zRwxofna6veziFncBAUm+pbgRmbIfYchfMemUPB3ieYT/C4av9gcGmkNGRsx1agAAAABJRU5ErkJggg==" />
                </div>
                <div class="col-md-10">
                    <h2 class="text-capitalize cp">get new friends</h2>
                    <p class="text-secondary mt-3">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Et at
                        cumque ut error distinctio minus iusto consequuntur dolore
                        obcaecati sapiente rerum magni delectus, voluptatem dicta! Enim
                        autem optio aliquid modi.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- End About -->

    <!-- Start Card -->

    <div class="row">
        <div class="col-md-12">
            <div class="row my-5 text-center">
                <div class="col-lg-12">
                    <h1>
                        What Do You Want to Learn?
                    </h1>
                    <p class="text-secondary my-3">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur adipisicing elit.
                    </p>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-3 my-5">
                            <div class="card bg-dark border-secondary">
                                <div class="card-body">
                                    <div class="text-center">
                                        <img src="img/courses/01.png" class="img-fluid rounded">
                                    </div>
                                    <p class="text-success mt-3">Technology</p>
                                    <h5>
                                        Digital Marketing Strategy
                                    </h5>
                                    <p class="text-secondary">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    </p>
                                </div>
                                <div class="card-footer border-top border-secondary pt-3">
                                    <div class="d-flex">
                                        <img src="img/users/01.jpg" class="rounded-circle r-img">
                                        <div class="ms-3">
                                            <span><b>Jorey Piere</b></span> <br>
                                            <span class="text-secondary">Mentor</span>
                                        </div>
                                    </div>
                                    <div class="text-center mt-5 mb-2">
                                        <button class="btn btn-danger">Access Class</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 my-5">
                            <div class="card bg-dark border-secondary">
                                <div class="card-body">
                                    <div class="text-center">
                                        <img src="img/courses/04.png" class="img-fluid rounded">
                                    </div>
                                    <p class="text-success mt-3">Technology</p>
                                    <h5>
                                        Digital Marketing Strategy
                                    </h5>
                                    <p class="text-secondary">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    </p>
                                </div>
                                <div class="card-footer border-top border-secondary pt-3">
                                    <div class="d-flex">
                                        <img src="img/users/1.jpg" class="rounded-circle r-img">
                                        <div class="ms-3">
                                            <span><b>Jorey Piere</b></span> <br>
                                            <span class="text-secondary">Mentor</span>
                                        </div>
                                    </div>
                                    <div class=" text-center mt-5 mb-2">
                                        <button class="btn btn-danger">Access Class</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 my-5">
                            <div class="card bg-dark border-secondary">
                                <div class="card-body">
                                    <div class="text-center">
                                        <img src="img/courses/03.png" class="img-fluid rounded">
                                    </div>
                                    <p class="text-success mt-3">Technology</p>
                                    <h5>
                                        Digital Marketing Strategy
                                    </h5>
                                    <p class="text-secondary">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    </p>
                                </div>
                                <div class="card-footer border-top border-secondary pt-3">
                                    <div class="d-flex">
                                        <img src="img/users/4.jpg" class="rounded-circle r-img">
                                        <div class="ms-3">
                                            <span><b>Jorey Piere</b></span> <br>
                                            <span class="text-secondary">Mentor</span>
                                        </div>
                                    </div>
                                    <div class=" text-center mt-5 mb-2">
                                        <button class="btn btn-danger">Access Class</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 my-5">
                            <div class="card bg-dark border-secondary">
                                <div class="card-body">
                                    <div class="text-center">
                                        <img src="img/courses/02.png" class="img-fluid rounded">
                                    </div>
                                    <p class="text-success mt-3">Technology</p>
                                    <h5>
                                        Digital Marketing Strategy
                                    </h5>
                                    <p class="text-secondary">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    </p>
                                </div>
                                <div class="card-footer border-top border-secondary pt-3">
                                    <div class="d-flex">
                                        <img src="img/users/8.jpg" class="rounded-circle r-img">
                                        <div class="ms-3">
                                            <span><b>Jorey Piere</b></span> <br>
                                            <span class="text-secondary">Mentor</span>
                                        </div>
                                    </div>
                                    <div class=" text-center mt-5 mb-2">
                                        <button class="btn btn-danger">Access Class</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center my-5">
                    <button class="btn btn-outline-danger">Show All Courses</button>
                </div>
            </div>
        </div>
    </div>

    <!-- End Card -->

    <!-- Start Carousel -->

    <!-- <div class="row my-5">
        <div class="col-md-12">
            <div class="row my-5 text-center">
                <div class="col-lg-12">
                    <h1>
                        Live Online Webinar
                    </h1>
                    <p class="text-secondary my-3">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur adipisicing elit.
                    </p>
                </div>
            </div>
            <div class="row my-5">
                <div class="col-md-6 text-center offset-3">
                    <div id="carouselExampleControls" class="carousel slide " data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active text-center">
                                <img src="img/carousel/01.png" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item text-center">
                                <img src="img/carousel/01.png" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item text-center">
                                <img src="img/carousel/01.png" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <!-- End Carousel -->

    <!-- Start Sub -->

    <div class="row">
        <div class="col-md-12">
            <div class="row my-5 text-center">
                <div class="col-lg-12">
                    <h1>
                        Courses Pricing
                    </h1>
                    <p class="text-secondary my-3">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur adipisicing elit.
                    </p>
                </div>

            </div>
            <div class="row my-5 px-2">
                <div class="col-md-4  p-3">
                    <div class="row zero">
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-2 mt-2">
                                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAe9JREFUSEvFlkFOwzAQRf+A95Qb0BPADShbaEUQQWJHuUE5AeUEwAkoO6SmUqqkbIETACeAI9A1EYNckipNM05iWtWrKPbM8x97xkNY0aAVcWENbvGxozcd0MC32bwVuMluA8BTDNwLyXuuCrcFa9BuDHsOydtbOtjh060I0UcapKDqPj18VoFXVtxit8fAWRpCwH1AXntp4Dy1CUwh2vTJ/yoLr6S4yW4XwKXg/CokT8+XGqXBDju1CEqfbU3w/KUQ1cuqngHr3GTQtnZMQI2BnRREp1CZMU0tAt4YmIRffwfkDRMHU/ABux0Crst4tl1DoPOA+r14I39uMkXB1neR3bTYZEJ90mbwXZG1zXxa7YzixFmLFw4f/4Aaj9R/y+T+/P4XCM+F5ipenHJ6V1h3pFJqzGN75Rr63TDldGEBabLL1S8T34Y06JjsjGDbFGPw54gG9f+ATbXZGIiip9Ko+IBdn4DD6qEGGLgYkXcj2RaFWtfZDcF4HP/PnWdgOCJv0pflDRG8zyc7a+BXwe5FQU0e/giRrr1JGzSzPCRP9C9OCKk0ZqCbDWH8wOj7MKOewEdSF2oAz7U4E5VSQYi7k4x6Oa1EcOpi5aqUzi6t3nTOIjjuODoKqle1g4zVtxWiG6l6FVYum1QqY7My8C9mY9AfNlRUkwAAAABJRU5ErkJggg==" />
                                </div>
                                <div class="col-10">
                                    <h2>
                                        Free
                                    </h2>
                                    <div class="d-flex">
                                        <h3 class="text-danger">
                                            0 $
                                        </h3>
                                        <span class="mt-2">/month</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row my-5">
                                <div class="col-lg-12">
                                    <ul class="pricing mb-5">
                                        <li> Lorem ipsum dolor sit amet </li>
                                        <li> Lorem ipsum dolor sit amet </li>
                                        <li> Lorem ipsum dolor sit amet </li>
                                        <li> Lorem ipsum dolor sit amet </li>
                                        <li> Lorem ipsum dolor sit amet </li>
                                    </ul>
                                    <div class="text-center mt-5">
                                        <button class="btn btn-outline-danger">Your Current Package</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 p-3">
                    <div class="row zero">
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-2 mt-2"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAXtJREFUSEvtlkFOwlAQQN8k3RsWkLiiboCdcAL1BtzAcgL1BHIEbmBv4BXqDWAHccPOBFiUHSTAmN+0ptQKBap1QZftMK/zZuYXoaBLCuJyBv+Z+bPq/6G68aE2FtW1Mn+vSD/Pt0rtcW2mbVGegWYC5smKzvBSxqe+xDdwfaY9lIddiQXuhmXxToFvgRsTdVR4CRPOEVwFTxQbaAM34TN/aXE1Lol/LHwLXJ+qSXQBzGVFM6k0YeNpVJbeyeCwr68mkSidYUXctKT1qZr+VoG+wGNW8MJiEDf0VXFjql0lGCiWFqWfNNYm6opwnxUYxSXnonjwEaoHkeqN4kQWTGWmyuS9hUU/VbUJjg2XLytaWYcr3qZRWQKLaffi7dm1TmbCXQSPDTYSrNNttGpLCzuqIFxDxzwblSWIOQgcVJ3hANkorX1H6MFgAw/73QWuE9P7JiucXzky46DwI2GvFX9fhUes16E/ySf+/A8kH48ZspxVZ5CUT0hhqj8Bc8+0H1hUCGcAAAAASUVORK5CYII=" /></div>
                                <div class="col-10">
                                    <h2>
                                        Express
                                    </h2>
                                    <div class="d-flex">
                                        <h3 class="text-danger">
                                            75 $
                                        </h3>
                                        <span class="mt-2">/month</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row my-5">
                                <div class="col-lg-12">
                                    <ul class="pricing mb-5">
                                        <li> Lorem ipsum dolor sit amet </li>
                                        <li> Lorem ipsum dolor sit amet </li>
                                        <li> Lorem ipsum dolor sit amet </li>
                                        <li> Lorem ipsum dolor sit amet </li>
                                        <li> Lorem ipsum dolor sit amet </li>
                                    </ul>
                                    <div class="text-center mt-5">
                                        <button class="btn btn-outline-danger">Your Current Package</button>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ">
                    <div class="row zero p-3">
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-2 mt-2"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAVhJREFUSEvtltFtg0AMhv+fSiW8dYRmg2SDZoH2NkiyQTtJukHpBpcJmg3KBs0IvJH0AVd3iIoLEGhIRKVgiQd0xp9tfoyJnow9ceGAJVH3GCEmddyUkIi6Mz5tfI2f8S/6HoIfQFnB56wpoOweI4DC0XramORehUgRMtCb3LcK/AEgOgYXE0hkboMQIf31sg7+6yuctQGbOJVwSdQClDcHJFwy0OEh3EnwD+ASXL7VBKl8VlbnccpbHeVnDtS+5PYV5zFs5fZmL18ArKgqLIbPsdFGCXoiOKs8s0mDkCIQEQSLkt8JFTeJtt35AC72SRJlBoj5js9vQ6uHVvcjLjuL09fzSxqA5z0XZ/n/2EAuUmlNUHcRyH57q4sk4PGlttVXOLmObRhd+y8cM9DbPExJ1bJTGpCnrhznefKdvnaWg8rPye7XgLm62w3ioqhqK+5Oahfh+gbID1UV7B9/WEw9AAAAAElFTkSuQmCC" /></div>
                                <div class="col-10">
                                    <h2>
                                        Premium
                                    </h2>
                                    <div class="d-flex">
                                        <h3 class="text-danger">
                                            120 $
                                        </h3>
                                        <span class="mt-2">/month</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row my-5">
                                <div class="col-lg-12">
                                    <ul class="pricing mb-5">
                                        <li> Lorem ipsum dolor sit amet </li>
                                        <li> Lorem ipsum dolor sit amet </li>
                                        <li> Lorem ipsum dolor sit amet </li>
                                        <li> Lorem ipsum dolor sit amet </li>
                                        <li> Lorem ipsum dolor sit amet </li>
                                    </ul>
                                    <div class="text-center mt-5">
                                        <button class="btn btn-outline-danger">Your Current Package</button>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <div class="row my-5">
        <div class="col-md-12 zero">
            <div class="row">
                <div class="col-lg-6">
                    <h1 class="m-5">
                        Get Our Apps, Now!
                    </h1>
                    <p class="ms-5">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Temporibus necessitatibus fuga rem porro quidem harum deleniti
                    </p>
                    <div class="d-md-flex">
                        <img src="img/logos/apple.png" class="cp">
                        <img src="img/logos/01.png" class="cp">
                    </div>
                </div>
                <div class="col-lg-6"></div>
            </div>
        </div>
    </div>

    <!-- End Sub -->

    <!-- Start Footer -->
