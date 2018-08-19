<style lang="sass">
@import "../utils/slider.sass"
</style>
<template>
  <div class="container-fluid">
    <div class="row flex">
			<h2 class="section-heading">Популярное за неделю</h2>
			<a class="popular-product-all" href="#">Все популярное</a>
			<div class="slider-navigation">
				<button class="prev" @click="slidePre"><i class="mdi mdi-chevron-left"></i></button>
				<button class="next" @click="slideNext"><i class="mdi mdi-chevron-right"></i></button>
			</div>
		</div>
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
</template>
<script>
import slider from '../components/slider'
export default {
  el: '#popular-product-slider',
  data () {
    return {
      someList: [],
      sliderinit: {
        currentPage: 0,
        tracking: false,
        thresholdDistance: 100, // 滑动距离阈值判定
        thresholdTime: 300, // 滑动时间阈值判定
        infinite: 4, // 多级滚动时，需要添加前后遍历数
        slidesToScroll: 1, // 需要滚动页面的数量
        loop: true // 无限循环
        // autoplay: 1000 // 自动播放:时间[ms]
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
          html: '<img class="product-img img-responsive" src="/images/products/01.jpg"><div class="product-item-content"><p class="product-label">Pure Cycles</p><p class="product-heading">Горный велосипед Veleta / 16 Speed</p><p class="product-price">$499</p><a class="add-to-cart" href="#"><i class="mdi mdi-cart-plus"></i> в корзину</a></div>'
        },
        {
          html: '<img class="product-img img-responsive" src="/images/products/02.jpg"><div class="product-item-content"><p class="product-label">Premium Fixed Gear</p><p class="product-heading">Велосипед Cleveland</p><p class="product-price">$449</p><a class="add-to-cart" href="#"><i class="mdi mdi-cart-plus"></i> в корзину</a></div>'
        },
        {
          html: '<img class="product-img img-responsive" src="/images/products/03.jpg"><div class="product-item-content"><p class="product-label">Pure Fix Original</p><p class="product-heading">Велосипед Viktor</p><p class="product-price">$349</p><a class="add-to-cart" href="#"><i class="mdi mdi-cart-plus"></i> в корзину</a></div>'
        },
        {
          html: '<img class="product-img img-responsive" src="/images/products/04.jpg"><div class="product-item-content"><p class="product-label">Small / Wright</p><p class="product-heading">Urban Commuter Bike</p><p class="product-price">$685</p><a class="add-to-cart" href="#"><i class="mdi mdi-cart-plus"></i> в корзину</a></div>'
        },
        {
          html: '<img class="product-img img-responsive" src="/images/products/05.jpeg"><div class="product-item-content"><p class="product-label">Pure Cycles</p><p class="product-heading">Велосипедная фара</p><p class="product-price">$36</p><a class="add-to-cart" href="#"><i class="mdi mdi-cart-plus"></i> в корзину</a></div>'
        },
        {
          html: '<img class="product-img img-responsive" src="/images/products/06.jpg"><div class="product-item-content"><p class="product-label">Pure Cycles</p><p class="product-heading">Колеса Pure Fix 700C 40mm Wheelset</p><p class="product-price">$99</p><a class="add-to-cart" href="#"><i class="mdi mdi-cart-plus"></i> в корзину</a></div>'
        },
        {
          html: '<img class="product-img img-responsive" src="/images/products/07.jpg"><div class="product-item-content"><p class="product-label">Pure Cycles</p><p class="product-heading">Тормоза</p><p class="product-price">$39</p><a class="add-to-cart" href="#"><i class="mdi mdi-cart-plus"></i> в корзину</a></div>'
        },
        {
          html: '<img class="product-img img-responsive" src="/images/products/08.jpg"><div class="product-item-content"><p class="product-label">Lezyne</p><p class="product-heading">Насос Lezyne Sport Floor</p><p class="product-price"><span class="old-price">$60</span> $49.99</p><a class="add-to-cart" href="#"><i class="mdi mdi-cart-plus"></i> в корзину</a></div>'
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
          color: '#fff',
          width: '23.5%',
          'margin-right': '2%'
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
