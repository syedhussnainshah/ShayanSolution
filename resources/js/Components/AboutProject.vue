<template>
    <div class="container " id="AboutHeroSection">
        <div class="row">
            <div class="col-md-12" id="AboutHeroSectionContent">
                <h1 class="">How our clients are <span> leading the change</span>
                </h1>
                <p class="">
                    We have helped 600+ companies accelerate their business with top-notch technology solutions.We have
                    helped 600+ companies accelerate their business with top-notch technology solutions.We have helped
                    600+ companies accelerate their business with top-notch technology solutions.
                </p>
                <ul class="">
                    <li>
                        <div class="ProjectImage">
                            <img src="https://test-shayansolution.syedhussnainshah.tech/images/OurTopTier/Group 46865.webp" alt="" />
                        </div>
                        <div class="SubLogo">
                            <img src="https://test-shayansolution.syedhussnainshah.tech/images/TopTierImages/7.webp" alt="">
                            <h6>WEBSITE APP</h6>
                        </div>
                        <h1>Work Management Made Easy</h1>
                        <p>4insite empowers facility managers with a robust software tool. Built on Django and Postgres, it
                            handles large transactional data.</p>
                    </li>
                    <li>
                        <div class="ProjectImage">
                            <img src="https://test-shayansolution.syedhussnainshah.tech/images/OurTopTier/Group%2046866.webp"
                                alt="" />
                        </div>
                        <div class="SubLogo">
                            <img src="https://test-shayansolution.syedhussnainshah.tech/images/TopTierImages/8.webp" alt="">
                            <h6>WEBSITE APP</h6>
                        </div>
                        <h1>Design your Dream Rooms with Al</h1>
                        <p>4insite empowers facility managers with a robust software tool. Built on Django and Postgres, it
                            handles large transactional data.</p>
                    </li>
                    <li>
                        <div class="ProjectImage">
                            <img src="https://test-shayansolution.syedhussnainshah.tech/images/OurTopTier/Group%2046867.webp"
                                alt="" />
                        </div>
                        <div class="SubLogo">
                            <img src="https://test-shayansolution.syedhussnainshah.tech/images/TopTierImages/3.webp" alt="">
                            <h6>WEBSITE APP</h6>
                        </div>
                        <h1>The Ultimate Tutoring Solution</h1>
                        <p>4insite empowers facility managers with a robust software tool. Built on Django and Postgres, it
                            handles large transactional data.</p>
                    </li>
                    <li>
                        <div class="ProjectImage">
                            <img src="https://test-shayansolution.syedhussnainshah.tech/images/OurTopTier/Group%2046868.webp"
                                alt="" />
                        </div>
                        <div class="SubLogo">
                            <img src="https://test-shayansolution.syedhussnainshah.tech/images/TopTierImages/6.webp" alt="">
                            <h6>WEBSITE APP</h6>
                        </div>
                        <h1>Hire Best Remote Developer</h1>
                        <p>4insite empowers facility managers with a robust software tool. Built on Django and Postgres, it
                            handles large transactional data.</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</template>
<style scoped>
#AboutHeroSection {
    margin-top: 149px;
}

#AboutHeroSectionContent {
    >h1 {
        max-width: 1037px;
        min-height: 64px;
        flex-shrink: 0;
        color: #000;
        font-family: Inter;
        font-size: 56px;
        font-style: normal;
        font-weight: 400;
        line-height: 120%;

        >span {
            color: #3219B3;
            font-family: Inter;
            font-size: 56px;
            font-style: normal;
            font-weight: 500;
            line-height: 120%;
        }
    }

    >p {
        max-width: 879px;
        color: #05000B;
        font-family: Inter;
        font-size: 17px;
        font-style: normal;
        font-weight: 500;
        line-height: 160%;
        opacity: 0.7;
        margin: 0px;
        padding: 0px;
        margin-top: 55px;
    }

    >ul {
        display: flex;
        justify-content: flex-start;
        align-items: center;
        flex-wrap: wrap;
        column-gap: 97px;
        row-gap: 90px;
        list-style: none;
        padding: 0px;
        margin: 0px;
        margin-top: 82px;

        @media screen and (max-width: 1200px) {
            justify-content: center;


        }


        >li {
            max-width: 486px;

            >.ProjectImage {


                @media screen and (min-width: 1200px) {
                    max-width: 486px;
                    min-height: 425px;


                }

                >img {

                    width: 100%;

                    @media screen and (min-width: 1200px) {
                        width: 100%;
                        min-height: 425px;


                    }

                }
            }

            >.SubLogo {
                display: flex;
                justify-content: space-between;
                align-items: center;
                margin: 0px;
                padding: 0px;
                margin-top: 35px;

                >img {
                    width: 152.997px;
                    /* height: 19.888px; */
                    flex-shrink: 0;
                }

                >h6 {
                    color: #000;
                    font-family: Inter;
                    font-size: 14px;
                    font-style: normal;
                    font-weight: 500;
                    line-height: 120%;
                    letter-spacing: 0.56px;
                    margin: 0px;
                    padding: 0px;
                }
            }

            >h1 {
                max-width: 292px;
                color: #000;
                font-family: Inter;
                font-size: 30px;
                font-style: normal;
                font-weight: 600;
                line-height: 120%;
                margin: 0px;
                padding: 0px;
                margin-top: 28.11px;
            }

            >p {
                max-width: 480px;
                min-height: 102px;
                flex-shrink: 0;
                color: #05000B;
                font-family: Inter;
                font-size: 17px;
                font-style: normal;
                font-weight: 500;
                line-height: 160%;
                opacity: 0.7;
                margin: 0px;
                padding: 0px;
                margin-top: 23px;
            }
        }
    }
}
</style>
