document.addEventListener('DOMContentLoaded', () => {
  kpiAnimate();
})

function kpiAnimate() {
  document.querySelectorAll( '.js-kpis, .kpis-module' ).forEach( ( js_kpi ) => {
    let bttnLocation = js_kpi.previousElementSibling;
    let animateBttn = bttnLocation.querySelector('#animateButton');
    
    let kpiNumbers = js_kpi.querySelectorAll( '.js-kpi-number' );
    let kpiGroup   = js_kpi.querySelectorAll( '.js-kpi-group' );
    let start      = undefined;
    let finished   = false;
    const duration = 2500;
    
    // This combines all the separate span elements, which are originally read individually by screen readers, into a single aria-label that will be read out as a whole. Ex: instead of reading "$9,000" as "Dollar sign. Nine. Comma. Zero zero zero," it will now read "Nine thousand dollars."
    function constructLabel( group ) {
                let numbers         = Array.from( group.querySelectorAll( '.js-kpi-number' ) );
                let symbolBefore    = group.querySelector( '.kpi__symbol--before, .js-kpis-symbol--before' );
                let symbolSeparator = group.querySelector( '.kpi__symbol--separator, .kpis__seperator' );
                let symbol          = group.querySelector( '.kpi__symbol, .js-kpis-symbol' );

                let label = '';
                label += symbolBefore ? symbolBefore.textContent : '';
                label += numbers[0].getAttribute( 'data-number' );
                label += symbolSeparator ? symbolSeparator.textContent : '';
                label += numbers[1] ? numbers[1].getAttribute( 'data-number' ) : '';
                label += symbol ? symbol.textContent : '';
                return label;
            }
    
    function animateNumber( timestamp ) {
                if ( finished ) {
                    return;
                }
                if ( undefined === start ) {
                    start = timestamp;
                }
                
                let elapsed  = timestamp - start;
                let progress = Math.min( elapsed / duration, 1 );
                
                kpiNumbers.forEach( ( kpiNumber ) => {
                    let countTo = kpiNumber.getAttribute( 'data-number' ) ;
                    if ( '000' == countTo ) {
                        countTo = 999;
                    }
                    const currentNumber = Math.floor( countTo * progress );
                    kpiNumber.innerText = currentNumber;
                } );

                if ( elapsed < duration ) {
                    requestAnimationFrame( animateNumber );
                } else {
                    cancelAnimationFrame( animateNumber );
                    finished = true;
                    kpiNumbers.forEach( ( kpiNumber ) => {
                        kpiNumber.innerText = kpiNumber.getAttribute( 'data-number' );
                    } );
                    kpiGroup.forEach( ( group ) => {
                        let finalValue = constructLabel( group );
                        group.setAttribute( 'aria-label', finalValue );
                        group.setAttribute( 'aria-live', 'polite' );
                    } );
                }
            }
    
    animateBttn.addEventListener('click', () => {
      start = undefined;
      finished = false
      requestAnimationFrame( animateNumber );
    });
    
    kpiGroup.forEach( ( group ) => {
                group.addEventListener( 'focus', () => {
                    finished = true;
                    cancelAnimationFrame( animateNumber );
                    kpiNumbers.forEach( ( kpiNumber ) => {
                        kpiNumber.innerText = kpiNumber.getAttribute( 'data-number' );
                    } );
                } );
            } );
    
  });
}