<template>
    <div class="container-fluid" id="SuccessStoriesContainerFluid">
        <div class="container" id="SuccessStoriesContainer">
            <div class="ps-2 pe-2">
                <h1>Our Success Stories</h1>
                <div class="btn-group" id="Carouselbutton">
                    <button class="owl-prev"><svg xmlns="http://www.w3.org/2000/svg" width="11" height="18"
                            viewBox="0 0 11 18" fill="none">
                            <path d="M9.0127 16.8228L1.39428 9.20435L9.0127 1.58594" stroke="white" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg></button>
                    <button class="owl-next"><svg xmlns="http://www.w3.org/2000/svg" width="11" height="18"
                            viewBox="0 0 11 18" fill="none">
                            <path d="M1.98633 16.6187L9.60474 9.00025L1.98633 1.38184" stroke="white" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg></button>
                </div>
            </div>
            <div class="row ">
                <div class="col-md-12 p-0" id="SuccessStoriesContent">
                    <div class="owl-carousel ">
                        <div v-for="story in SuccessStories" :key="story.id" class="item">
                            <div class="CarouselContent">
                                <p>{{ story.description }}</p>
                                <h1>
                                    {{ story.name }}
                                </h1>
                                <h5>{{ story.designation }}</h5>
                            </div>
                            <div class="CarouselImg">
                                <img :src="story.image" alt="">
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    props: {
        SuccessStories: Array,
    },

}
</script>
<style scoped>
#SuccessStoriesContainerFluid {
    min-height: 818px;
    background: #0B092D;
    flex-shrink: 0;
    margin-top: 280px;

}

#SuccessStoriesContainer {
    max-width: 1100px;
    padding-top: 118px;

    >div {
        margin-top: 42px;
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;

        >h1 {
            color: #FFF;
            font-family: Inter;
            font-size: 49px;
            font-style: normal;
            font-weight: 700;
            line-height: 120%;
        }
    }
}

#Carouselbutton {
    >button {

        width: 60px;
        background-color: #268FC5;
        color: white;
        height: 58px;
        border: none;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    >button:nth-child(1) {
        border-top-right-radius: 50%;
        border-top-left-radius: 50%;
        border-bottom-left-radius: 50%;
        margin-right: 15px;
    }

    >button:nth-child(2) {
        border-top-right-radius: 50%;
        border-top-left-radius: 50%;
        border-bottom-right-radius: 50%;
    }

    @media screen and (max-width: 664px) {
        width: 100%;
        display: flex;
        justify-content: flex-end;
    }
}

#SuccessStoriesContent {
    display: flex;
    justify-content: center;
    align-items: center;

    >div {
        /* background-color: blue; */
        padding: 0px;
        max-width: 1100px;
    }
}

.item {
    display: flex;
    justify-content: center;
    align-items: center;


        width: 508px !important;
        height: 472px;
        flex-shrink: 0;
        border: 1px solid #D9D9D9;
        background: #FFF;
        display: flex;

        >.CarouselContent {
            width: 278px;
            padding-top: 71px;
            padding-left: 52px;
            padding-right: 29px;
            border-right: 1px solid #D9D9D9;

            /* 230 */
            >p {
                color: #05000B;
                font-family: Inter;
                font-size: 15px;
                font-style: normal;
                font-weight: 400;
                line-height: 139%;
                width: 197px;
                height: 212px;
                flex-shrink: 0;
            }

            >h1 {
                margin-top: 22px;
                color: #05000B;
                font-family: Inter;
                font-size: 25px;
                font-style: normal;
                font-weight: 600;
                line-height: 160%;
                /* 40px */
            }

            >h5 {
                color: #05000B;
                font-family: Inter;
                font-size: 15px;
                font-style: normal;
                font-weight: 400;
                line-height: 139%;
                width: 198px;
                height: 63px;
                flex-shrink: 0;
            }
        }

        >.CarouselImg {
            display: flex;
            justify-content: center;
            align-items: center;
            padding-left: 13px;
            padding-right: 33px;
        }
}
</style>
