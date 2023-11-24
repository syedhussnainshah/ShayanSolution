
<template>
    <div class="container" id="ServiceWeProvideContainer">
        <h1><span> Services </span> We Provide To Empower You</h1>
        <p>Shayan Solutions is a renowned software development company in the USA known for its end-to-end approach,
            dedicated to turning ideas into reality. Their seasoned team offers customized services for rapid user
            engagement.</p>
        <div class="row">
            <div class="col-md-12" id="ServicesWeProviderContent">
                <ul class="">
                    <li v-for="(item, index) in ServicesWeProvide" :key="index">
                        <div>
                            <img :src="item.image" alt="">

                        </div>
                        <h1>{{ item.title }}</h1>
                        <p>
                            {{ item.description }}
                        </p>
                    </li>

                </ul>

            </div>
        </div>
    </div>
</template>
<script>
export default {
    props: {
        ServicesWeProvide: Array,
    },
    mounted() {
        console.log(this.ServicesWeProvide);
    }
};
</script>
<style>
#ServiceWeProvideContainer {
    margin-top: 214px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;

    >h1 {
        color: #000;
        font-family: Inter;
        font-size: 49px;
        font-style: normal;
        font-weight: 700;
        line-height: 120%;

        >span {
            color: #3219B3;
            font-family: Inter;
            font-size: 49px;
            font-style: normal;
            font-weight: 700;
            line-height: 120%;
        }
    }

    >p {
        max-width: 775px;
        min-height: 75px;
        flex-shrink: 0;
        color: #05000B;
        text-align: center;
        font-family: Inter;
        font-size: 16px;
        font-style: normal;
        font-weight: 500;
        line-height: 153.5%;
        opacity: 0.7;
    }

    #ServicesWeProviderContent {
        display: flex;
        justify-content: center;
        align-items: center;

        >ul {
            list-style: none;
            display: flex;
            justify-content: space-around;
            align-items: center;
            flex-wrap: wrap;
            margin-top: 70px;
            padding-left: 0px;
            padding-right: 0px;
            max-width: 1150px;

            >li {
                max-width: 261px;
                min-height: 354px;
                flex-shrink: 0;
                border-radius: 17px;
                background: #FAFBFC;
                padding-left: 47px;
                margin-bottom: 41px;
                padding-right: 39px;

                >div {
                    width: 75px;
                    height: 75px;
                    flex-shrink: 0;
                    background-color: #F0F0F0;
                    border-radius: 50%;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    margin-top: 25px;
                    margin-bottom: 0px;
                }

                >h1 {
                    max-width: 190px;
                    color: #000;
                    font-family: Inter;
                    font-size: 30px;
                    font-style: normal;
                    font-weight: 600;
                    line-height: 113%;
                    /* 33.9px */
                    letter-spacing: -0.39px;
                    margin: 0px;
                    padding: 0px;
                    margin-top: 11px;
                    margin-right: 22px;
                }

                >p {
                    max-width: 175px;
                    min-height: 111px;
                    flex-shrink: 0;
                    color: #4A4A4A;
                    font-family: Inter;
                    font-size: 14px;
                    font-style: normal;
                    font-weight: 400;
                    line-height: 117.9%;
                    /* 16.506px */
                    margin-top: 15px;
                }
            }
        }
    }
}
</style>
