import './bootstrap';
import { Livewire, Alpine } from '../../vendor/livewire/livewire/dist/livewire.esm';

import detectSwipe from 'swipe-detect'

import.meta.glob([
    '../images/**',
]);


Alpine.directive(
    'swipe',
    (elem, { value, modifiers, expression }, { evaluateLater, cleanup }) => {
        // console.log({ value, modifiers });
        const evaluate = expression ? evaluateLater(expression) : () => { }
        const callback = (arg) => {
            evaluate(() => { }, { scope: {}, params: [arg] })
        }
        const threshold =
            (modifiers[0] === 'threshold' &&
                (modifiers[1] || '').endsWith('px') &&
                Number(modifiers[1].replace('px', ''))) ||
            50

        const detectorInstance = detectSwipe(
            elem,
            function (direction) {
                if (!value) {
                    callback(direction)
                    return
                }
                if (direction === value) {
                    callback(direction)
                    return
                }
            },
            threshold
        )
        cleanup(() => {
            detectorInstance.disable()
        })
    }
)

Livewire.start()
