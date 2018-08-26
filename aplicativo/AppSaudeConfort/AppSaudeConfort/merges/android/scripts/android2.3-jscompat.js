// Suporte de Polyfill para Function.prototype.bind() no Android 2.3
(function () {
    if (!Function.prototype.bind) {
        Function.prototype.bind = function (thisValue) {
            if (typeof this !== "function") {
                throw new TypeError(this + " cannot be bound as it is not a function");
            }

            // bind() também permite anexar argumentos no início da chamada
            var preArgs = Array.prototype.slice.call(arguments, 1);

            // A função real para associar o valor "this" e argumentos a
            var functionToBind = this;
            var noOpFunction = function () { };

            // O argumento "this" a ser usado
            var thisArg = this instanceof noOpFunction && thisValue ? this : thisValue;

            // A função bound resultante
            var boundFunction = function () {
                return functionToBind.apply(thisArg, preArgs.concat(Array.prototype.slice.call(arguments)));
            };

            noOpFunction.prototype = this.prototype;
            boundFunction.prototype = new noOpFunction();

            return boundFunction;
        };
    }
}());
