<template>
    <div class="container  " id="HiringModelContainer">
        <h1>IT Augmentation <span> Hiring Model </span>
        </h1>
        <div class="row p-0 w-100 ">
            <div class="col-md-12 p-0 m-0 " id="HiringModelContent">
                <ul>
                    <li v-for="(item, index) in HiringModel" :key="index">
                        <h2>{{ item.title }}</h2>
                        <ul>
                            <li v-for="(points, index) in item.HiringModelPoints" :key="index"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="16" height="12" viewBox="0 0 16 12"
                                    fill="none">
                                    <path
                                        d="M5.18082 10.9025C5.26384 10.9688 5.36976 11.0035 5.47807 10.9997C5.58638 10.9959 5.68936 10.954 5.76706 10.8821L6.07987 10.5921L14.8809 1.70261C14.9605 1.62216 15.0033 1.5149 14.9998 1.40441C14.9964 1.29392 14.947 1.18926 14.8625 1.11345C14.778 1.03765 14.6654 0.996902 14.5494 1.00018C14.4334 1.00347 14.3235 1.05051 14.2439 1.13095L5.45688 10.0079L5.44069 10.0229L1.71939 7.04504C1.67541 7.0098 1.62458 6.98316 1.56979 6.96663C1.515 6.95011 1.45732 6.94402 1.40006 6.94872C1.3428 6.95342 1.28707 6.96882 1.23606 6.99403C1.18505 7.01924 1.13975 7.05378 1.10275 7.09566C1.06575 7.13755 1.03778 7.18596 1.02042 7.23814C1.00307 7.29033 0.996681 7.34525 1.00162 7.39979C1.00655 7.45432 1.02272 7.5074 1.04919 7.55598C1.07566 7.60457 1.11193 7.64771 1.15591 7.68294L5.18082 10.9025Z"
                                        fill="#3219B3" stroke="#58C1F7" />
                                </svg>

                                <span> {{ points }}</span>

                            </li>
                            <!-- <li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="12" viewBox="0 0 16 12"
                                    fill="none">
                                    <path
                                        d="M5.18082 10.9025C5.26384 10.9688 5.36976 11.0035 5.47807 10.9997C5.58638 10.9959 5.68936 10.954 5.76706 10.8821L6.07987 10.5921L14.8809 1.70261C14.9605 1.62216 15.0033 1.5149 14.9998 1.40441C14.9964 1.29392 14.947 1.18926 14.8625 1.11345C14.778 1.03765 14.6654 0.996902 14.5494 1.00018C14.4334 1.00347 14.3235 1.05051 14.2439 1.13095L5.45688 10.0079L5.44069 10.0229L1.71939 7.04504C1.67541 7.0098 1.62458 6.98316 1.56979 6.96663C1.515 6.95011 1.45732 6.94402 1.40006 6.94872C1.3428 6.95342 1.28707 6.96882 1.23606 6.99403C1.18505 7.01924 1.13975 7.05378 1.10275 7.09566C1.06575 7.13755 1.03778 7.18596 1.02042 7.23814C1.00307 7.29033 0.996681 7.34525 1.00162 7.39979C1.00655 7.45432 1.02272 7.5074 1.04919 7.55598C1.07566 7.60457 1.11193 7.64771 1.15591 7.68294L5.18082 10.9025Z"
                                        fill="#3219B3" stroke="#58C1F7" />
                                </svg> <span>Evolutionary Enhancements</span>
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="12" viewBox="0 0 16 12"
                                    fill="none">
                                    <path
                                        d="M5.18082 10.9025C5.26384 10.9688 5.36976 11.0035 5.47807 10.9997C5.58638 10.9959 5.68936 10.954 5.76706 10.8821L6.07987 10.5921L14.8809 1.70261C14.9605 1.62216 15.0033 1.5149 14.9998 1.40441C14.9964 1.29392 14.947 1.18926 14.8625 1.11345C14.778 1.03765 14.6654 0.996902 14.5494 1.00018C14.4334 1.00347 14.3235 1.05051 14.2439 1.13095L5.45688 10.0079L5.44069 10.0229L1.71939 7.04504C1.67541 7.0098 1.62458 6.98316 1.56979 6.96663C1.515 6.95011 1.45732 6.94402 1.40006 6.94872C1.3428 6.95342 1.28707 6.96882 1.23606 6.99403C1.18505 7.01924 1.13975 7.05378 1.10275 7.09566C1.06575 7.13755 1.03778 7.18596 1.02042 7.23814C1.00307 7.29033 0.996681 7.34525 1.00162 7.39979C1.00655 7.45432 1.02272 7.5074 1.04919 7.55598C1.07566 7.60457 1.11193 7.64771 1.15591 7.68294L5.18082 10.9025Z"
                                        fill="#3219B3" stroke="#58C1F7" />
                                </svg>
                                <span>Full time dedicated set of resources</span>
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="12" viewBox="0 0 16 12"
                                    fill="none">
                                    <path
                                        d="M5.18082 10.9025C5.26384 10.9688 5.36976 11.0035 5.47807 10.9997C5.58638 10.9959 5.68936 10.954 5.76706 10.8821L6.07987 10.5921L14.8809 1.70261C14.9605 1.62216 15.0033 1.5149 14.9998 1.40441C14.9964 1.29392 14.947 1.18926 14.8625 1.11345C14.778 1.03765 14.6654 0.996902 14.5494 1.00018C14.4334 1.00347 14.3235 1.05051 14.2439 1.13095L5.45688 10.0079L5.44069 10.0229L1.71939 7.04504C1.67541 7.0098 1.62458 6.98316 1.56979 6.96663C1.515 6.95011 1.45732 6.94402 1.40006 6.94872C1.3428 6.95342 1.28707 6.96882 1.23606 6.99403C1.18505 7.01924 1.13975 7.05378 1.10275 7.09566C1.06575 7.13755 1.03778 7.18596 1.02042 7.23814C1.00307 7.29033 0.996681 7.34525 1.00162 7.39979C1.00655 7.45432 1.02272 7.5074 1.04919 7.55598C1.07566 7.60457 1.11193 7.64771 1.15591 7.68294L5.18082 10.9025Z"
                                        fill="#3219B3" stroke="#58C1F7" />
                                </svg>
                                <span>No Hidden Cost</span>
                            </li> -->
                        </ul>
                        <button type="button">
                            Get Started
                        </button>

                    </li>

                </ul>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    props: {
        HiringModel: Array,
    },

};
</script>
<style>
#HiringModelContainer {
    margin-top: 290px;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;

    >h1 {
        color: #000;
        font-family: Inter;
        font-size: 49px;
        font-style: normal;
        font-weight: 700;
        line-height: 120%;

        >span {
            color: #2554CA;
            font-family: Inter;
            font-size: 49px;
            font-style: normal;
            font-weight: 700;
            line-height: 120%;
        }

    }

    @media screen and (max-width: 430px) {
        >h1 {
            font-size: 39px;

            >span {
                font-size: 39px;

            }
        }
    }

}

#HiringModelContent {
    >ul {
        list-style: none;
        padding: 0px;
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 45px;
        flex-wrap: wrap;
        column-gap: 35px;
        row-gap: 35px;

        >li {
            width: 400px;
            min-height: 361px;
            flex-shrink: 0;
            background: #F5F5F5;
            padding-left: 35px;
            padding-right: 35px;

            >h2 {
                color: #000;
                font-family: Inter;
                font-size: 30px;
                font-style: normal;
                font-weight: 600;
                line-height: 113%;
                /* 33.9px */
                letter-spacing: -0.39px;
                margin-top: 35px;
                margin-bottom: 0px;
            }

            >ul {
                display: flex;
                justify-content: center;
                align-items: start;
                list-style: none;
                padding: 0px;
                margin-top: 35px;
                flex-direction: column;
                row-gap: 24px;

                >li {
                    display: flex;
                    justify-content: flex-start;
                    align-items: center;

                    >svg {
                        width: 14px;
                        height: 10px;
                        flex-shrink: 0;
                    }

                    >span {
                        color: #4A4A4A;
                        font-family: Inter;
                        font-size: 16px;
                        font-style: normal;
                        font-weight: 400;
                        line-height: 117.9%;
                        /* 18.864px */
                        margin-left: 11px;
                    }
                }
            }

            >button {
                width: 100%;
                height: 45px;
                flex-shrink: 0;
                margin-top: 33px !important;
                border: 1px solid #D9D9D9;
                background: #FFF;
                color: #4A4A4A;
                font-family: Inter;
                font-size: 17px;
                font-style: normal;
                font-weight: 400;
                line-height: 117.9%;
                text-decoration: none;
                margin-right: 35px;
                margin-bottom: 36px;
            }

            >button:hover {
                background: #268FC5;
                color: white;
            }
        }

        @media screen and (max-width: 446px) {
            >li {
                width: 350px;

            }
        }

        @media screen and (max-width: 375px) {
            >li {
                width: 300px;

            }
        }

        >li:nth-child(2) {
            background: #F5F7FF;
        }

        >li:nth-child(3) {
            background: #CEFFFF;
        }
    }
}</style>
