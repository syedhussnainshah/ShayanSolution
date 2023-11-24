<template>
    <div class="container-fluid" id="CustomerExperienceContainerFluid">
        <div class="container">
            <div class="row">
                <div class="col-md-12" id="CustomerExperienceContent">
                    <h1>Excellent <span> customer experience </span> proven by our clients</h1>
                    <ul>
                        <li>
                            <div class="CardImage">
                                <img src="https://test-shayansolution.syedhussnainshah.tech/images/TopTierImages/6.webp"
                                    alt="">
                            </div>
                            <p>
                                With a wide range of services, and experience in multiple industries, such as finance,
                                retail, proptech, or healthcare, we understand the challenges you're dealing with.
                            </p>
                            <div class="CardProfileImage">
                                <img src="https://test-shayansolution.syedhussnainshah.tech//images/CustomerExperience/gapper-customer.webp" alt="">
                                <h2>Ahmed Muzammil/ <span> VP of Engineering, Gapier.io</span></h2>
                            </div>
                        </li>
                        <li>
                            <div class="CardImage">
                                <img src="https://test-shayansolution.syedhussnainshah.tech/images/TopTierImages/8.webp"
                                    alt="">
                            </div>
                            <p>
                                With a wide range of services, and experience in multiple industries, such as finance,
                                retail, proptech, or healthcare, we understand the challenges you're dealing with.
                            </p>
                            <div class="CardProfileImage">
                                <img src="https://test-shayansolution.syedhussnainshah.tech//images/CustomerExperience/newroom-customer.webp" alt="">
                                <h2>Jay Yap/ <span>CEO newroom</span></h2>
                            </div>
                        </li>
                        <li>
                            <div class="CardImage">
                                <img src="https://test-shayansolution.syedhussnainshah.tech/images/TopTierImages/7.webp"
                                    alt="">
                            </div>
                            <p>
                                With a wide range of services, and experience in multiple industries, such as finance,
                                retail, proptech, or healthcare, we understand the challenges you're dealing with.
                            </p>
                            <div class="CardProfileImage">
                                <img src="https://test-shayansolution.syedhussnainshah.tech//images/CustomerExperience/4insite-customer.webp" alt="">
                                <h2>Marie Espinoza/ <span> Founder 4insite</span></h2>
                            </div>
                        </li>
                        <li>
                            <div class="CardImage">
                                <img src="https://test-shayansolution.syedhussnainshah.tech/images/TopTierImages/3.webp"
                                    alt="">
                            </div>
                            <p>
                                With a wide range of services, and experience in multiple industries, such as finance,
                                retail, proptech, or healthcare, we understand the challenges you're dealing with.
                            </p>
                            <div class="CardProfileImage">
                                <img src="https://test-shayansolution.syedhussnainshah.tech//images/CustomerExperience/tootar-customer.webp" alt="">
                                <h2>Zeeshan Haider/ <span> CEO, Tootar</span></h2>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</template>
<style>
#CustomerExperienceContainerFluid {
    margin-top: 202px;
    min-height: 1112px;
    flex-shrink: 0;
    background: #F6F8FB;
}

#CustomerExperienceContent {
    >h1 {
        max-width: 493px;
        color: #000;
        font-family: Inter;
        font-size: 33px;
        font-style: normal;
        font-weight: 500;
        line-height: 125%;
        margin: 0px;
        padding: 0px;
        margin-top: 92px;

        >span {
            color: #3219B3;
            font-family: Inter;
            font-size: 33px;
            font-style: normal;
            font-weight: 600;
            line-height: 125%;
        }
    }

    >ul {
        margin: 0px;
        padding: 0px;
        margin-top: 32px;
        display: flex;
        justify-content: flex-start;
        align-items: flex-start;
        flex-wrap: wrap;
        list-style: none;
        column-gap: 100px;
        row-gap: 94px;

        @media screen and (max-width: 1400px) {
            justify-content: center;


        }


        >li {
            max-width: 530px;
            min-height: 298px;
            border-radius: 10px;
            background: #FFF;
            padding-left: 37px;
            padding-right: 13px;
            padding-bottom: 32px;

            >.CardImage {
                max-width: 156.869px;
                min-height: 19.64px;
                flex-shrink: 0;
                margin-top: 61px;

                >img {
                    max-width: 156.869px;
                    max-height: 156px;
                    flex-shrink: 0;
                }
            }

            >p {
                margin: 0px;
                padding: 0px;
                margin-top: 21px;
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
            }

            >.CardProfileImage {
                display: flex;
                justify-content: flex-start;
                align-items: center;
                flex-wrap: wrap;
                column-gap: 12px;

                >img {
                    max-width: 65px;
                    max-height: 65px;
                    flex-shrink: 0;
                    border-radius: 50%;
                }

                >h2 {
                    color: #05000B;
                    font-family: Inter;
                    font-size: 17px;
                    font-style: normal;
                    font-weight: 500;
                    line-height: 160%;
                    opacity: 0.7;

                    >span {
                        opacity: 0.7;
                        color: #05000B;
                        font-family: Inter;
                        font-size: 13px;
                        font-style: normal;
                        font-weight: 400;
                        line-height: 160%;
                    }
                }
            }
        }

        @media screen and (min-width: 1400px) {

            >li:nth-child(1) {
                margin-top: 91px;
                /* background-color: red; */
            }

            >li:nth-child(4) {
                margin-top: -91px;
            }
        }

    }
}
</style>
