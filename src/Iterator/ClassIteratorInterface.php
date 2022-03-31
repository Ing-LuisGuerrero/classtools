
    /**
     * Create a new iterator where classes are filtered based on name
     */
    public function name(string $pattern): Filter;

    /**
     * Create a new iterator where classes are filtered based on namespace
     */
    public function inNamespace(string $namespace): Filter;

    /**
     * Create iterator where classes are filtered based on method return value
     */
    public function where(string $methodName, $expectedReturn = true): Filter;

    /**
     * Register a negated filter
     */
    public function not(Filter $filter): Filter;

    /**
     * Cache iterator
     */
    public function cache(): Filter;

    /**
     * Transform found classes
     */
    public function transform(Writer $writer): string;

    /**
     * Minimize found classes
     */
    public function minimize(): string;
}
