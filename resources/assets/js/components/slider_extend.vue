<style lang="sass">
@import "../utils/slider.sass"
</style>
<template>
  <div>
    <div style="width:70%;margin:20px auto;height:400px">
      <slider ref="slider" :pages="someList" :sliderinit="sliderinit" @slide='slide' @tap='onTap' @init='onInit'>
        <div slot="loading">
          <div class="loadingDot">
            <i></i>
            <i></i>
            <i></i>
            <i></i>
          </div>
        </div>
      </slider>
    </div>
    <div class="sliderButton">
      <button @click="slidePre">上一页/pre</button>
      <button @click="slideNext">下一页/next</button>
      <button @click="appendslider">添加一页/append</button>
      <button @click="turnTo(2)">跳转到第三页/turnTo</button>
      <button @click="autoplayStart">启动自动滚动/autoplayStart</button>
      <button @click="autoplayStop">停止自动滚动/autoplayStop</button>
      <button @click="loadingShow">loading显示/loadingShow</button>
      <button @click="loadingHide">loading关闭/loadingHide</button>
    </div>
  </div>
</template>
<script>
import slider from '../components/slider'
export default {
  el: '#sliderExtend',
  data () {
    return {
      someList: [],
      sliderinit: {
        currentPage: 1,
        tracking: false,
        thresholdDistance: 100, // 滑动距离阈值判定
        thresholdTime: 300, // 滑动时间阈值判定
        loop: false // 无限循环
        // autoplay:1000,//自动播放:时间[ms]
      }
    }
  },
  components: {
    slider
  },
  mounted () {
    let that = this
    setTimeout(function () {
      that.someList = [
        {
          html: '<div class="slide1">slide1</div>',
          style: {
            'background': '#1bbc9b'
          },
          // 对slider的扩展，如果需要对某一页banner添加说明或其他不同的需求，可以通过定义component来进行扩展
          component: {
            props: ['item', 'sliderinit', 'pages'],
            data () {
              return {
                img: 'src/img/testimg-1.jpg'
              }
            },
            mounted () {
              console.log(this.item)
            },
            template: '<div><img style="width: 100%" :src="img" /><p style="position: absolute; margin: 0; right: 10px; bottom: 10px; font-size: 16px;">test1</p></div>'
          }
        },
        {
          html: 'slide2',
          style: {
            'background': '#4bbfc3'
          },
          component: {
            props: ['item', 'sliderinit', 'pages'],
            data () {
              return {
                img: 'src/img/testimg-2.jpg'
              }
            },
            mounted () {
              console.log(this.item)
            },
            template: '<div><img style="width: 100%" :src="img" /><p style="position: absolute; margin: 0; right: 10px; bottom: 10px; font-size: 16px;">test2</p></div>'
          }
        },
        {
          html: 'slide3',
          style: {
            'background': '#7baabe'
          },
          component: {
            props: ['item', 'sliderinit', 'pages'],
            data () {
              return {
                img: 'src/img/testimg-3.jpg'
              }
            },
            mounted () {
              console.log(this.item)
            },
            template: '<div><img style="width: 100%" :src="img" /><p style="position: absolute; margin: 0; right: 10px; bottom: 10px; font-size: 16px;">test3</p></div>'
          }
        }
      ]
    }, 2000)
  },
  methods: {
    turnTo (num) {
      // 传递事件 vue 2.0 传递事件修改了，好的写法应该直接写在空vue类中
      this.$refs.slider.$emit('slideTo', num)
    },
    slideNext () {
      this.$refs.slider.$emit('slideNext')
      // slider.$emit('slideNext')
    },
    slidePre () {
      this.$refs.slider.$emit('slidePre')
      // slider.$emit('slidePre')
    },
    autoplayStart () {
      this.$refs.slider.$emit('autoplayStart')
      // slider.$emit('slidePre')
    },
    autoplayStop () {
      this.$refs.slider.$emit('autoplayStop')
      // slider.$emit('slidePre')
    },
    appendslider () {
      this.someList.push({
        html: 'slidernew',
        style: {
          background: '#333',
          color: '#fff'
        }
      })
    },
    loadingShow () {
      this.$refs.slider.$emit('loadingShow')
      // slider.$emit('slidePre')
    },
    loadingHide () {
      this.$refs.slider.$emit('loadingHide')
      // slider.$emit('slidePre')
    },
    // 监听事件发生了变化,需要指向一个子组件实例
    slide (data) {
      console.log(data)
    },
    onTap (data) {
      console.log(data)
    },
    onInit (data) {
      console.log(data)
    }
  }
}
</script>
