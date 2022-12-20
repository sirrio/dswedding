<script setup>
defineProps(['users'])
</script>

<template>
  <div class="font-mono overflow-x-auto">
    <table class="table w-full">
      <!-- head -->
      <thead>
        <tr>
          <th />
          <th>Name</th>
          <th>Anzahl</th>
          <th>Teilnahme</th>
        </tr>
      </thead>
      <tbody
        v-for="(user, userKey) in users"
        :key="userKey"
      >
        <tr>
          <th>{{ user.id }}</th>
          <td>{{ user.name }}</td>
          <td>{{ user.number }} Person(en)</td>
          <td>{{ user.isAttending === 1 ? 'nimmt Teil' : 'nimmt nicht Teil' }}</td>
        </tr>
      </tbody>>
    </table>
  </div>
</template>
