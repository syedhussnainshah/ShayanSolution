<template>
    <div class="container" id="DigitalAccelerationContainer">
        <div class="row">
            <div class="col-md-6" id="DigitalAccelerationTitle">
                <h1>Cross-industry experience in <span> digital acceleration </span></h1>
            </div>
            <div class="col-md-6" id="DigitalAccelerationParagraph">
                <p>With a wide range of services, and experience in multiple industries, such as finance, retail, proptech,
                    or healthcare, we understand the challenges you're dealing with.</p>
            </div>
        </div>
        <div class="row" id="DigitalAccelerationImages">
            <div class="col-md-12">
                <ul>
                    <li v-for="(item, index) in TopTier" :key="index">
                        <img :src="item.image" alt="">
                    </li>

                </ul>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    props: {
        TopTier: Array,
    },
    mounted() {
        console.log(this.TopTier);
    }
};
</script>
<style>
#DigitalAccelerationContainer {
    margin-top: 186px;
}

#DigitalAccelerationTitle {
    >h1 {
        max-width: 485px;
        color: #000;
        font-family: Inter;
        font-size: 33px;
        font-style: normal;
        font-weight: 500;
        line-height: 125%;

        >span {
            color: #3219B3;
            font-family: Inter;
            font-size: 33px;
            font-style: normal;
            font-weight: 600;
            line-height: 125%;
        }
    }
}

#DigitalAccelerationParagraph {
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
    }
}

#DigitalAccelerationImages {
    margin: 0px;
    padding: 0px;
    margin-top: 94.52px;

    >div {
        margin: 0px;
        padding: 0px;

        >ul {
            list-style: none;
            padding: 0px;
            margin: 0px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            column-gap: 89px;
            row-gap: 41.78px;

            >li {
                min-width: 140px;
                min-height: 82px;
                /* background: red; */
                display: flex;
                justify-content: center;
                align-items: center;

                >img {
                    max-width: 140px;
                }
            }

        }

    }
}
</style>
