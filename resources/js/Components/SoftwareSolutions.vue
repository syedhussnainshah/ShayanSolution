<template>
    <div class="container " id="SoftwareSolutionsContainer">
        <h1>Using Technology for Better <span> Software Solutions</span></h1>
        <p>
            Experienced software agency skilled in diverse technologies, creating user-friendly solutions.
        </p>
        <div class="row ">
            <div class="col-md-12 " id="SoftwareSolutionsContent">
                <ul class="">
                    <li v-for="(item, index) in SoftwareSolutions" :key="index">
                        <div>
                            <img :src="item.image" alt="">
                        </div>
                        <span>
                            {{ item.name }}
                        </span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    props: {
        SoftwareSolutions: Array,
    },

};
</script>
<style>
#SoftwareSolutionsContainer {
    margin-top: 260px;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;


    >h1 {
        color: #000;
        font-family: Inter;
        font-size: 48px;
        font-style: normal;
        font-weight: 700;
        line-height: 120%;
        margin: 0px;

        >span {
            color: #3219B3;
            font-family: Inter;
            font-size: 48px;
            font-style: normal;
            font-weight: 700;
            line-height: 120%;
        }
    }

    >p {
        max-width: 541px;
        color: #05000B;
        text-align: center;
        font-family: Inter;
        font-size: 16px;
        font-style: normal;
        font-weight: 500;
        line-height: 153.5%;
        opacity: 0.7;
        margin-top: 18px;
        margin-bottom: 0px;
    }
}

#SoftwareSolutionsContent {
    padding: 0px;

    >ul {
        list-style: none;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-wrap: wrap;
        padding: 0px;
        gap: 16px;
        margin-top: 80px;
        row-gap: 33px;

        >li {
            min-width: 176px;
            height: 76px;
            flex-shrink: 0;
            background: #FFF;
            box-shadow: 1px 4px 12px 0px rgba(0, 0, 0, 0.08);
            display: flex;
            justify-content: flex-start;
            align-items: center;
            padding-right: 5px;

            >div {
                background-color: #E8E8EB;
                width: 45.384px;
                height: 45.384px;
                flex-shrink: 0;
                border-radius: 50%;
                display: flex;
                justify-content: center;
                align-items: center;
                padding: 8px;
                margin-left: 20px;

                >img {
                    width: 100%;
                }
            }

            >span {
                color: #0B1644;
                font-family: Inter;
                font-size: 19px;
                font-style: normal;
                font-weight: 500 !important;
                line-height: 30.467px;
                /* 160.351% */
                letter-spacing: -0.532px;
                margin-left: 8px;
                white-space: nowrap;
                margin-right: 21px;

            }
        }

        >li:hover {
            background: #268FC5;
            box-shadow: 1px 4px 12px 0px rgba(0, 0, 0, 0.08);
            cursor: pointer;

            >span {
                color: white;
            }
        }
    }
}
</style>
