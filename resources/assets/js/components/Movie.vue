<template>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <h3 class="panel-heading">電影</h3>
​
                    <div class="panel-body">
                        <table class="table-condensed data-table">
                            <thead>
                                <tr>
                                    <th v-if="dataset.resultData.length>0" v-for="(title,titleKey) in dataset.resultDataKey" :key="titleKey">
                                        {{ title }}
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-if="dataset.resultData.length>0" v-for="(data,dataKey) in dataset.resultData" :key="dataKey">
                                    <td>{{ data.title }}</td>
                                    <td>{{ data.startDate }}</td>
                                    <td>{{ data.endDate }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
​
<script>
    export default {
        created(){
            this.init();
        },
        data(){
            return{
                dataset:{
                    resultData:[],
                    resultDataKey:[]
                }
            }
        },
        methods:{
            init(){
                let self = this;
                axios({
                    method: 'post',
                    url: '/Movie',
                })
                    .then(function(response){
                        console.log(response);
                        let resultData = response.data;
                        for(let data in resultData){
                            self.dataset.resultData.push(resultData[data]);
                        }
                        //集合陣列的key
                        for(let i=0; i<resultData.length; i++){
                            self.dataset.resultDataKey = [
                                "活動名稱","開始時間","結束時間"
                            ]
                        }
                    })
            }
        }
    }
</script>